<?php

require __DIR__.'/../functions.php';

echo 'Test SMTP email';
//autoResponder('prshnx@gmail.com', 'Test User', true);
if (isset($_POST['email']))
    autoResponder($_POST['email'], 'Test User', true);

?>
    <form action="" method="post">
        <input type="email" name="email" required placeholder="email"/>
        <input type="submit"/>
    </form>