<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2/18/2019
 * Time: 10:06
 */
// Start session: Added by FED(GS) on 7th Feb 2025
session_start();

// 1. Check if CSRF token exists in the session ---------------------------------------
if (!isset($_SESSION['csrf_token'])) {
    die('CSRF token missing.');
}
// Validate CSRF token
if (!isset($_POST['csrf_token']) || !hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])) {
    die('Invalid CSRF token.');
}
// Unset the token after validation to prevent reuse
unset($_SESSION['csrf_token']);

// 2. Honeypot hidden field validation - if value prevent form submission ----------------------
if (!empty($_POST['honeypot'])) {
    die('Honeypot: Spam detected.');
}

// 3. Referrer Check -----------------------------------------------
$allowedReferrer = 'https://arrowheadmanorhotel.com/lp';
if (empty($_SERVER['HTTP_REFERER']) || parse_url($_SERVER['HTTP_REFERER'], PHP_URL_HOST) !== parse_url($allowedReferrer, PHP_URL_HOST)) {
    die('Invalid referrer.');
}

// 4. Google reCAPTCHA Validation -------------------------------------
$secretKey = '6LdNqc0qAAAAAKLXhGQ608fZPSTPZbXocY_tG91_';
$responseKey = $_POST['g-recaptcha-response'];
$remoteIp = $_SERVER['REMOTE_ADDR'];
$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$remoteIp");
$response = json_decode($response);
//var_dump($response);die;
//if (!$response->success || $response->score < 0.5) {
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

    // Automatic Form Field Data Creation
    // Updated by FED(GS) on 7th Feb 2025
    foreach ($_POST as $key => $data) {
    	if (!isIgnoredKey($key))
    		if($key != 'csrf_token')
    			if($key != 'honeypot')
    				if($key != 'g-recaptcha-response')
    					if($key != 'google-recaptcha')
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