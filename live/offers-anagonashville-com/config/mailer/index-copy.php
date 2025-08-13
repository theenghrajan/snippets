<?php

/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2/18/2019
 * Time: 10:06
 */
 
 //-------------------- CORS FIX: Added by FED(GS) on 30th January 2025
$allowed_origin = "https://offers.anagonashville.com"; // Change this to your frontend URL

header("Access-Control-Allow-Origin: $allowed_origin");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

// Handle preflight request
if ($_SERVER['REQUEST_METHOD'] == "OPTIONS") {
  http_response_code(200);
  exit(0);
}
//return ob_get_clean();
// --------------------------------

// Start session: Added by FED(RT) on 07-02-25
session_start();

$submittedForm = '';

/*
// 1. CSRF Token Validation
if (isset($_POST['csrf_token_form1'])) {
    // Check if CSRF token exists in the session
    if (!isset($_SESSION['csrf_token_form1'])) {
        die('CSRF token missing.');
    }
    // Validate CSRF token
    // if (!isset($_POST['csrf_token_form1']) || !hash_equals($_SESSION['csrf_token_form1'], $_POST['csrf_token_form1'])) {
    //     die('Invalid CSRF token.');
    // }
    // Unset the token after validation to prevent reuse
    unset($_SESSION['csrf_token_form1']);
    $submittedForm = 'top';
}

if (isset($_POST['csrf_token_form2'])) {
    if (!isset($_SESSION['csrf_token_form2'])) {
        die('CSRF token missing.');
    }
    if (!isset($_POST['csrf_token_form2']) || !hash_equals($_SESSION['csrf_token_form2'], $_POST['csrf_token_form2'])) {
        die('Invalid CSRF token.');
    }
    unset($_SESSION['csrf_token_form2']);
    $submittedForm = 'bottom';
}
*/

// 2. Honeypot Field Validation
if (!empty($_POST['honeypot'])) {
    die('Honeypot: Spam detected.');
}

// 3. Referrer Check
$allowedReferrer = 'http://offers.anagonashville.com'; // Replace with your landing page URL (no trailing slash)
if (empty($_SERVER['HTTP_REFERER']) || parse_url($_SERVER['HTTP_REFERER'], PHP_URL_HOST) !== parse_url($allowedReferrer, PHP_URL_HOST)) {
    die('Invalid referrer.');
}

// 4. Google reCAPTCHA Validation
$secretKey = '6LcsLpwrAAAAAE9V9KJuSLiG2XFcpmtIJDeLBWa0'; // Replace with your Google reCAPTCHA secret key
$responseKey = $_POST['g-recaptcha-response'];
$remoteIp = $_SERVER['REMOTE_ADDR'];
$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$remoteIp");
$response = json_decode($response);
if (!$response->success) {
    die('Captcha: Spam detected.');
}

require_once 'functions.php';

// Check for Primary required value like [!empty($_POST['email'])] or allow all by [!empty($_POST)]
if (!empty($_POST)) {
    $user_data = [];
    $user_files = [];
    $user_email = empty($_POST['email']) ? '' : $_POST['email'];
    $form_name = empty($_POST['form-name']) ? 'Contact Form' : $_POST['form-name'];
    $first_name = empty($_POST['first-name']) ? '' : $_POST['first-name'];
    $last_name = empty($_POST['last-name']) ? '' : $_POST['last-name'];
    $full_name = empty($_POST['full-name']) ? $first_name . ' ' . $last_name : $_POST['full-name'];

    // Automatic Form Field Data Creation (excluding honeypot, CSRF, and reCAPTCHA fields)
    foreach ($_POST as $key => $data) {
        if (!isIgnoredKey($key))
            // if ($key != 'csrf_token_form1')
            //     if ($key != 'csrf_token_form2')
                    if ($key != 'honeypot')
                        if ($key != 'g-recaptcha-response')
                            if ($key != 'google-recaptcha')
                                $user_data[ucfirst(preg_replace('/[^A-Za-z0-9 ]/', ' ', $key))] = is_array($data) ? implode(', ', $data) : $data;
    }
    $user_files = fileAttachment();

    // Manual Form Data Creation
    /*
    $user_zip = empty($_POST['zip-code']) ? '' : $_POST['zip-code'];
    $user_phone = empty($_POST['phone-number']) ? '' : $_POST['phone-number'];
    $user_message = empty($_POST['message']) ? '' : $_POST['message'];
    $user_question = isset($_POST['question']) ? $_POST['question'] : '';

    $user_data['Email'] = $user_email;
    if (!empty(trim($full_name)))
        $user_data['Full Name'] = $full_name;
    if (!empty(trim($user_phone)))
        $user_data['Phone'] = $user_phone;
    if (!empty(trim($user_zip)))
        $user_data['Zip Code'] = $user_zip;
    if (!empty(trim($user_message)))
        $user_data['Message'] = $user_message;
    if (!empty(trim($user_question)))
        $user_data['Where did you hear about us?'] = $user_question;
    */

    if (CONFIG['test_mode']) {
        header('Content-Type: application/json');
        echo json_encode(["TEST MODE" => "ON", "FORMATTED_FORM_DATA" => $user_data]);
    } else {
        sendSMTPMail(CONFIG['site_title'] . ' ' . $form_name, renderAdminEmail($user_data), [], $user_files);
        if ($user_email)
            sendSMTPMail('Message from ' . CONFIG['site_title'], renderAutoResponder($full_name), [$user_email => $full_name]);
    }
    // Delete uploaded files if any after the mail is sent.
    unlinkFiles($user_files);
} else {
    echo 'Mailer for ' . CONFIG['site_title'];
}
