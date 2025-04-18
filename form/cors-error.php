<?php

// Put code in mailer/index.php file on top

//-------------------- CORS FIX: Added by FED(GS) on 30th January 2025
$allowed_origin = "https://aprpc.com"; // Change this to your frontend URL

header("Access-Control-Allow-Origin: $allowed_origin");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

// Handle preflight request
if ($_SERVER['REQUEST_METHOD'] == "OPTIONS") {
  //http_response_code(200);
  exit(0);
}
//return ob_get_clean();
// --------------------------------