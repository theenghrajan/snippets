<?php

/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2/18/2019
 * Time: 10:06
 */

// Start session: Added by FED(RT) on 07-08-25
session_start();

$submittedForm = '';

// 1. CSRF Token Validation
if (isset($_POST['csrf_token_form1'])) {
    // Check if CSRF token exists in the session
    if (!isset($_SESSION['csrf_token_form1'])) {
        die('CSRF token missing.');
    }
    // Validate CSRF token
    if (!isset($_POST['csrf_token_form1']) || !hash_equals($_SESSION['csrf_token_form1'], $_POST['csrf_token_form1'])) {
        die('Invalid CSRF token.');
    }
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

// 2. Honeypot Field Validation
if (!empty($_POST['honeypot'])) {
    die('Honeypot: Spam detected.');
}

// 3. Referrer Check
$allowedReferrer = 'https://lp.atlantapiattorney.com/personal-injury'; // Replace with your landing page URL (no trailing slash)
if (empty($_SERVER['HTTP_REFERER']) || parse_url($_SERVER['HTTP_REFERER'], PHP_URL_HOST) !== parse_url($allowedReferrer, PHP_URL_HOST)) {
    die('Invalid referrer.');
}

// 4. Google reCAPTCHA Validation
$secretKey = '6LdXpXsrAAAAAEgtY1RcC4DBgDc37MQqoWQIeUsq'; // Replace with your Google reCAPTCHA secret key
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
    $user_phone = empty($_POST['phone']) ? '' : $_POST['phone'];
    $user_message = empty($_POST['message']) ? '' : $_POST['message'];
    // Automatic Form Field Data Creation (excluding honeypot, CSRF, and reCAPTCHA fields)
    foreach ($_POST as $key => $data) {
        // List of keys to ignore
        $ignoredKeys = [
            'csrf_token_form1',
            'csrf_token_form2',
            'honeypot',
            'g-recaptcha-response',
            'google-recaptcha'
        ];
        if (!isIgnoredKey($key) && !in_array($key, $ignoredKeys)) {
            $user_data[ucfirst(preg_replace('/[^A-Za-z0-9 ]/', ' ', $key))] = is_array($data) ? implode(', ', $data) : $data;
        }
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
    
    
    // Replace with your Zapier webhook URL
    $webhook_url = 'https://hooks.zapier.com/hooks/catch/3085755/u3c821h/';
    
    // Example data to send
    $data = [
        'firstname' => $first_name,
    	'lastname' => $last_name,
        'email' => $user_email,
    	'phone' => $user_phone,
        'message' => $user_message,
        'website' => $allowedReferrer
    ];
    
    // Initialize cURL
    $ch = curl_init($webhook_url);
    
    // Encode data to JSON
    $jsonData = json_encode($data);
    
    // Set cURL options
    curl_setopt($ch, CURLOPT_URL, $webhook_url);  // Set the Webhook URL
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  // Return response as a string
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',  // Set the content type as JSON
    ));
    curl_setopt($ch, CURLOPT_POST, true);  // Use POST method
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);  // Attach the data
    
    // Execute the cURL request and get the response
    $response = curl_exec($ch);
    
    // Check for errors
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    } else {
        //echo 'Success: ' . $response;
    }
    
    // Close cURL
    curl_close($ch);


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
