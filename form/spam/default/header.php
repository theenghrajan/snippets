<?php
// Start session: Added by FED(GS) on 6th Feb 2025
session_start();

// Generate CSRF token and store in session variable
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1" />
  <title>SPAM Control Methods</title>
</head>

<body>
  <div class="site-wrapper">

    <!-- Header - starts -->
    <header class="site-header pt-[30px]">
      <div class="container py-[11px]">
        <h1>This is Header.</h1>
      </div>
    </header>
    <!-- Header - ends -->

    <main class="site-content">