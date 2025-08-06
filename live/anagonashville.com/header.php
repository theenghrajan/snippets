<?php
// Start session: Added by FED(RT) on 07-02-25
session_start();

// Generate CSRF token and store in session variable
if (empty($_SESSION['csrf_token_form1'])) {
  $_SESSION['csrf_token_form1'] = bin2hex(random_bytes(32));
}

// Repeat for additional forms as needed
if (empty($_SESSION['csrf_token_form2'])) {
  $_SESSION['csrf_token_form2'] = bin2hex(random_bytes(32));
}
?>

<?php require_once './reusable-components.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1" />
  <meta name="robots" content="noindex, nofollow">
  <meta name="googlebot" content="noindex">
  <title>Anago Nashville</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="lib/swiper/swiper-bundle.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
  <div class="site-wrapper">
    <?php require_once './landing-parts/layout/header_content.php'; ?>
    <main class="site-content">
      <?php require_once './landing-parts/layout/banner_content.php'; ?>