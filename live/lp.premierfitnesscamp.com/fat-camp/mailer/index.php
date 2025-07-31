<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2/18/2019
 * Time: 10:06
 */

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
    
    /** -------------------------------------------------
	 * Send form data to What Converts CRM
     * -------------------------------------------------
	**/
	$phone = empty($_POST['phone-number']) ? '' : $_POST['phone-number'];
	$whentostart = empty($_POST['when-would-you-like-to-start']) ? '' : $_POST['when-would-you-like-to-start'];
	$msg = empty($_POST['your-message-here']) ? '' : $_POST['your-message-here'];
	
	$utm_source = empty($_POST['utm-source']) ? 'LP' : $_POST['utm-source'];
	$utm_campaign = empty($_POST['utm-campaign']) ? '' : $_POST['utm-campaign'];
	$utm_medium = empty($_POST['utm-medium']) ? '' : $_POST['utm-medium'];
	$gclid = empty($_POST['gclid']) ? '' : $_POST['gclid'];
	$msclkid = empty($_POST['msclkid']) ? '' : $_POST['msclkid'];
	
	$lp_link = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	
	$phone1 = substr($phone, -10, -7) . "-" . substr($phone, -7, -4) . "-" . substr($phone, -4);
	
	$api_token = '112374-ebff194663c55368'; 
	$api_secret = '46d05588393e126b3db880911f7b47dc'; 
	$api_url = 'https://app.whatconverts.com/api/v1/leads';

    $lead_url = 'https://www.premierfitnesscamp.com/lp/fat-camp/';

    // Lead Data - Modify this to suit your requirements
	$lead_data = [
        // required options
        'send_notification' => false, // send an email notification for this lead; true or (default) false.
        'lead_type' => 'web_form', // appointment, chat, email, event, other, phone_call, text_message, transaction or web_form
        'lead_source' => $utm_source, // Lead source
        'lead_medium' => $utm_medium, // Lead medium
        'lead_campaign' => $utm_campaign, // Campaign name
        'lead_url' => $lead_url, // Lead URL
        'gclid' => $gclid,
        'msclkid' => $msclkid,
        // 'message' => $msg,
        'sender_name' => $full_name, // Lead name
        'contact_name' => $full_name ,
        'phone_number' => $phone1, // Lead phone
        'email_address' => $user_email, // Lead email
        'form_name' => $form_name,
        'landing_url' => $lp_link,
        // Other fields as required
        'mapped_fields[Contact Name]' => $full_name,
        'mapped_fields[utm_source]' => $utm_source,
        'mapped_fields[utm_campaign]' => $utm_campaign,
        'mapped_fields[utm_medium]' => $utm_medium,
        'mapped_fields[gclid]' => $gclid,
        'mapped_fields[msclkid]' => $msclkid,
        'additional_fields[Message]' => $msg,
        'additional_fields[When would you like to start?]' => $whentostart,
	];
	//var_dump($lead_data);
	// Initialize cURL 
	$ch = curl_init($api_url); 
	// Set cURL options 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
	curl_setopt($ch, CURLOPT_HTTPHEADER, [ 'Authorization: Basic ' . base64_encode( $api_token . ':' . $api_secret ), ]); 
	curl_setopt($ch, CURLOPT_POST, true); 
	curl_setopt($ch, CURLOPT_POSTFIELDS, $lead_data); 

    // Execute cURL request
	$response = curl_exec($ch); 
	
	// Check for errors 
	/*if (curl_errno($ch)) { 
		echo 'cURL error: ' . curl_error($ch); 
	} else { 
		// Process response 
		$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE); 
		if ($http_code == 200) { 
			echo "Lead successfully created!"; 
		} else {
			echo "Error creating lead!"; 
		} 
	 }*/
	 
	 // Close cURL 
	 curl_close($ch);
	/* ------------------------------------------------- */

    if (CONFIG['test_mode']) {
        header('Content-Type: application/json');
        echo json_encode(["TEST MODE" => "ON", "FORMATTED_FORM_DATA" => $user_data]);
    } else {
        /** 
        validate google recaptcha response
        */
        $recaptcha_secret = "6LcU43ojAAAAAJW1FXA4hh-GVgN776J-w1wvMONt";
        $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$recaptcha_secret."&response=".$_POST['g-recaptcha-response']);
        $response = json_decode($response, true);
        if($response["success"] === true) {
            $msgAdmin = "<h3>New users submission from LP form. User Details are listed below.</h3>";
            $msgAdmin .= "<p><strong>Full Name:</strong> ".$full_name."</p>";
            $msgAdmin .= "<p><strong>Email:</strong> ".$user_email."</p>";
            $msgAdmin .= "<p><strong>Phone:</strong> ".$phone."</p>";
			$msgAdmin .= "<p><strong>When would you like to start:</strong> ".$whentostart."</p>";
            $msgAdmin .= "<p><strong>Message:</strong> ".$msg."</p>";
			$msgAdmin .= "<p><strong>UTM SOURCE:</strong> ".$utm_source."</p>";
			$msgAdmin .= "<p><strong>UTM Medium:</strong> ".$utm_medium."</p>";
			$msgAdmin .= "<p><strong>UTM Campaign:</strong> ".$utm_campaign."</p>";
			$msgAdmin .= "<p><strong>GCLID:</strong> ".$gclid."</p>";
			$msgAdmin .= "<p><strong>MSCLKID:</strong> ".$msclkid."</p>";
            
            $userMsg = "<p>Hello ".$full_name.",</p>";
            $userMsg .= "<p>Thank you for your message, we will be in touch shortly.</p><p>If you would like to speak with someone sooner, please call ".CONFIG['phone']."</p>";
            
            //sendSMTPMail(CONFIG['site_title'] . ' ' . $form_name, renderAdminEmail($user_data), [], $user_files);
            sendSMTPMail(CONFIG['site_title'] . ' ' . $form_name, $msgAdmin, [], $user_files);
            if ($user_email)
                //sendSMTPMail('Message from ' . CONFIG['site_title'], renderAutoResponder($full_name), [$user_email => $full_name]);
                sendSMTPMail('Message from ' . CONFIG['site_title'], $userMsg, [$user_email => $full_name]);
        } else {
            echo "Something went wrong. Please try again later.";
        }
    }
    // Delete uploaded files if any after the mail is sent.
    unlinkFiles($user_files);
} else {
    echo 'Mailer for ' . CONFIG['site_title'];
}