<?php

/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2/18/2019
 * Time: 10:06
 */

 // Start session: Added by FED(RT) on 3rd April 2025
session_start();

$submittedForm = '';

if(isset($_POST['csrf_token_form1'])) {
	// 1. Check if CSRF token exists in the session ---------------------------------------
	if (!isset($_SESSION['csrf_token_form1'])) {
		die('CSRF token missing.');
	}
	// Validate CSRF tokens
	if (!isset($_POST['csrf_token_form1']) || !hash_equals($_SESSION['csrf_token_form1'], $_POST['csrf_token_form1'])) {
		die('Invalid CSRF token.');
	}
	// Unset the token after validation to prevent reuse
	unset($_SESSION['csrf_token_form1']);
	
	$submittedForm = 'top';
}
if(isset($_POST['csrf_token_form2'])) {
	// 1. Check if CSRF token exists in the session ---------------------------------------
	if (!isset($_SESSION['csrf_token_form2'])) {
		die('CSRF token missing.');
	}
	// Validate CSRF token
	if (!isset($_POST['csrf_token_form2']) || !hash_equals($_SESSION['csrf_token_form2'], $_POST['csrf_token_form2'])) {
		die('Invalid CSRF token.');
	}
	// Unset the token after validation to prevent reuse
	unset($_SESSION['csrf_token_form2']);
	
	$submittedForm = 'bottom';
}

// 2. Honeypot hidden field validation - if value prevent form submission ----------------------
if (!empty($_POST['honeypot'])) {
    die('Honeypot: Spam detected.');
}

// 3. Referrer Check -----------------------------------------------
$allowedReferrer = 'https://evereadyexpress.com/lp';// Replace with the LP URL without the trailing slash
if (empty($_SERVER['HTTP_REFERER']) || parse_url($_SERVER['HTTP_REFERER'], PHP_URL_HOST) !== parse_url($allowedReferrer, PHP_URL_HOST)) {
    die('Invalid referrer.');
}

// 4. Google reCAPTCHA Validation -------------------------------------
$secretKey = '6LeBwQgrAAAAABoyTY0IxI6RAGiRYdDQ_q3O5WYM'; // Replace with the Google Re-Captcha Secret Key for the project
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
    foreach ($_POST as $key => $data) {
        if (!isIgnoredKey($key))
            if ($key != 'csrf_token_form1')
				if ($key != 'csrf_token_form2')
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
        /** -------------------------------------
		 * Post To Zapier Webhook
		 * Then from Zapier to OnePage CRM
		 * Added on 4th April 2025 by FED 31 (GS)
		 * Please do not remove without prior notice
		 * -------------------------------------- */
		// Set the Zapier Webhook URL (from the Catch Hook step)
		$webhook_url = 'https://hooks.zapier.com/hooks/catch/3085755/2ekcgem/';  // Replace with your webhook URL
		
		//form submitted data
		$name = trim($full_name);
		$nameParts = explode(' ', $name, 2); // Split into two parts
		$fname = $nameParts[0];
		$lname = isset($nameParts[1]) ? $nameParts[1] : '';
		
		$phone = empty($_POST['phone']) ? '' : $_POST['phone'];
		$company = empty($_POST['company']) ? '' : $_POST['company'];
		$message = empty($_POST['message']) ? '' : $_POST['message'];
		
		//Address Details
		$fromStreetAddress = empty($_POST['street-address-from']) ? '' : $_POST['street-address-from'];
		$toStreetAddress = empty($_POST['street-address-to']) ? '' : $_POST['street-address-to'];
		$fromZip = empty($_POST['zip-from']) ? '' : $_POST['zip-from'];
		$toZip = empty($_POST['zip-to']) ? '' : $_POST['zip-to'];
		
		//Package Details
		$noOfPieces = empty($_POST['no-of-pieces']) ? '' : $_POST['no-of-pieces'];
		$weight = empty($_POST['weight-lbs']) ? '' : $_POST['weight-lbs'];
		$packageType = empty($_POST['package-type']) ? '' : $_POST['package-type'];
		$vehicleType = empty($_POST['vehicle-type']) ? '' : $_POST['vehicle-type'];
		
		// Data you want to send to Zapier (each field is a separate key-value pair)
		$data = array(
			'first_name' => $fname,
			'last_name' => $lname,
			'email' => $user_email,
			'phone' => $phone,
			'company' => $company,
			'message' => $message,
			'from_street_address' => $fromStreetAddress,
			'to_street_address' => $toStreetAddress,
			'from_zip' => $fromZip,
			'to_zip' => $toZip,
			'no_of_pieces' => $noOfPieces,
			'weight' => $weight,
			'package_type' => $packageType,
			'vehicle_type' => $vehicleType,
		);
		
		// Convert the data to JSON format
		$data_json = json_encode($data);
		
		// Initialize cURL session
		$ch = curl_init();
		
		// Set cURL options
		curl_setopt($ch, CURLOPT_URL, $webhook_url);  // Set the Webhook URL
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  // Return response as a string
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
			'Content-Type: application/json',  // Set the content type as JSON
		));
		curl_setopt($ch, CURLOPT_POST, true);  // Use POST method
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data_json);  // Attach the data
		
		// Execute the cURL request and get the response
		$response = curl_exec($ch);
		
		// Check for errors
		if (curl_errno($ch)) {
			echo 'Error:' . curl_error($ch);
		} else {
			//echo 'Response: ' . $response;  // Output the response (usually a success message)
		}
		
		// Close cURL session
		curl_close($ch);
		/** ------------------- END ---------------- */
		
		sendSMTPMail(CONFIG['site_title'] . ' ' . $form_name, renderAdminEmail($user_data), [], $user_files, $submittedForm);
        if ($user_email)
            sendSMTPMail('Message from ' . CONFIG['site_title'], renderAutoResponder($full_name), [$user_email => $full_name], [], [], $submittedForm);
    }
    // Delete uploaded files if any after the mail is sent.
    unlinkFiles($user_files);
} else {
    echo 'Mailer for ' . CONFIG['site_title'];
}
