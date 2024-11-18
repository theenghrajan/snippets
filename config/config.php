<?php

/**
 * Created by PhpStorm.
 * User: XperSona
 * Date: 2/12/2019
 * Time: 11:10
 * Copy Generated By Landing Page Generator
 */

const CONFIG = [
  /*
    |--------------------------------------------------------------------------
    | TEST MODE When enabled mails will not be sent
    | Output of the request will be sent in json format
    |--------------------------------------------------------------------------
    */
  'test_mode' => false,

  /*
    |--------------------------------------------------------------------------
    | Site Info
    |--------------------------------------------------------------------------
    |
    | 1. Title: Name of the Site will be displayed in content and subject line
    | 2. Phone: Phone Number Eg.(555) 256723
    |
    */

  'site_title' => 'Landing Page',
  'tag_line' => '',
  'phone' => '',
  'site_url' => '', // ABSOLUTE_PATH // Do NOT add trailing slash '/'

  'site_email' => 'todd@hammonddb.com', // Leave Blank or comment for no email in footer
  //'link_facebook' => 'https://www.facebook.com/', // Leave Blank or comment for no icon and no link
  //'link_instagram' => 'https://www.instagram.com/', // Leave Blank or comment for no icon and no link
  //'link_twitter' => 'https://twitter.com/', // Leave Blank or comment for no icon and no link

  /*
    |--------------------------------------------------------------------------
    | Email From Address [Leave Blank for same as SMTP_EMAIL]
    |--------------------------------------------------------------------------
    | Use the same as smtp_email to be in safe side
    | EG:
    | 'john@example.com' => 'John Doe'
    |
    */
  'from' => [
    // 'prshnx@gmail.com' => 'Persona'
  ],

  /*
    |--------------------------------------------------------------------------
    | Email Reply To Address [Leave Blank for same as FROM_ADDRESS]
    |--------------------------------------------------------------------------
    | 'john@example.com' => 'John Doe'
    |
    */
  'reply_to' => [
    // 'frontend@smartsites.com' => 'FED SmartSites'
  ],


  /*
    |--------------------------------------------------------------------------
    | Send Email To  Array() Only One
    |--------------------------------------------------------------------------
    | Send Emails to  use only one and use CC for others
    | EG:
    | 'john@example.com' => 'John Doe'
    |
    */
  'to' => [
    'frontend@smartsites.com' => 'FED SmartSites'
  ],
  /*
    |--------------------------------------------------------------------------
    | CC Email To  Array() Multiple
    |--------------------------------------------------------------------------
    | Send Emails to using CC
    | EG:
    | 'john@example.com' => 'John Doe'
    |
    */
  'cc' => [
    //'user1@example.com' => 'User One Name',
    //'user2@example.com' => 'User Two Name'
  ],
  /*
    |--------------------------------------------------------------------------
    | SMTP Information [Login Credentials]
    |--------------------------------------------------------------------------
    | Send Emails using following SMTP Credentials
    | Ports are assigned in smtp_config.php
    |
    */
  'smtp' => [
    'smtp_email' => 'outbound@smartsites.com',
    'smtp_password' => 'zqyewbpfjukgmvpy',

    /*
        * Be Careful below this Line
        * Don't change is you don't know what you're doing
        */
    'smtp_auth' => true,
    'smtp_secure' => 'tls',
    'smtp_host' => 'smtp.gmail.com',
    'smtp_port' => 587
  ]
];

const THEME_DIR = __DIR__ . '/../mailer/theme/theme-1'; //Do NOT add end slash '/'


/**
 * Success Message
 * @return  string
 */
function successMessage()
{
  $phone = empty(CONFIG['phone']) ? '' : CONFIG['phone'];
  $tel = preg_replace('/[^0-9]/', '', $phone);
  return "<div class='thank-you-message'><p class='thank-you-heading'>Thank you for your message, " . CONFIG['site_title'] . ".</p>" .
    "<p class='thank-you-content'>We will be in touch shortly. If you would like to speak with someone sooner, <br> please call " .
    "<a href='tel:" . $tel . "'>" . $phone . " </a> for immediate service.</p>";
}
