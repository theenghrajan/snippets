<?php

if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $usersIP = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $usersIP = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $usersIP = $_SERVER['REMOTE_ADDR'];
}

if (!empty($usersIP)) {
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, "ipinfo.io/" . $usersIP . "?token=b3821ffbe523b0");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec($curl);
    $jsonResult = json_decode($result);
    curl_close($curl);

    if (!empty($jsonResult->country)) {
        if ($jsonResult->country == "NG") {
            header('HTTP/1.0 403 Forbidden');
            echo '<h1>Forbidden</h1>';
            echo 'You are forbidden!';
            die;
        }
    }
}