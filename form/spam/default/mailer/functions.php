<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2/14/2019
 * Time: 11:55
 */

require __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../config/config.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception as MailerException;

/**
 * @param $subject
 * @param $body
 * @param array $to
 * @param array $attachments
 * @param bool $debug
 */
function sendSMTPMail($subject, $body, $to = [], $attachments = [], $debug = false)
{
    if (empty($to)) {
        $to = CONFIG['to'];
        $adminEmail = true;
    }

    $from = (empty(CONFIG['from']) && !empty(CONFIG['smtp'])) ? [CONFIG['smtp']['smtp_email'] => CONFIG['site_title']] : CONFIG['from'];
    $reply_to = empty(CONFIG['reply_to']) ? $from : CONFIG['reply_to'];
    $cc = empty(CONFIG['cc']) ? [] : CONFIG['cc'];

    try {
        $mail = new PHPMailer;
        if (!empty(CONFIG['smtp'])) {
            $mail->isSMTP();
            $mail->SMTPAuth = CONFIG['smtp']['smtp_auth'];
            $mail->SMTPDebug = $debug ? 3 : 0;
            $mail->SMTPSecure = CONFIG['smtp']['smtp_secure'];
            $mail->Host = CONFIG['smtp']['smtp_host'];
            $mail->Port = CONFIG['smtp']['smtp_port'];
            $mail->Username = CONFIG['smtp']['smtp_email'];
            $mail->Password = CONFIG['smtp']['smtp_password'];

            /*$mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );*/
        } else {
            $mail->isMail();
        }

        foreach ($from as $email => $name)
            $mail->setFrom($email, $name);

        foreach ($to as $email => $name)
            $mail->addAddress($email, $name);

        foreach ($reply_to as $email => $name)
            $mail->addReplyTo($email, $name);

        if (!empty($adminEmail))
            foreach ($cc as $email => $name)
                $mail->addCC($email, $name);

        if (!empty($attachments)) {
            foreach ($attachments as $file)
                $mail->addAttachment($file);
        }

        $mail->Subject = $subject;
        $mail->AltBody = $subject;
        $mail->msgHTML($body);
        if (!$mail->send()) {
            echo "<h1>Error Sending Email</h1>";
            echo $mail->ErrorInfo;
        } else {
            if ($debug)
                echo "<h1>Mail Sent</h1>";
            if (isset($adminEmail))
                echo successMessage();
        }

    } catch (MailerException $e) {
        echo 'Message: ' . $e->getMessage();
    }
}

/**
 * @param $first_name
 * @return false|string
 */
function renderAutoResponder($first_name)
{
    ob_start();
    require_once THEME_DIR . '/auto-respond.php';
    return ob_get_clean();

}

/**
 * @param $user_data
 * @return false|string
 */
function renderAdminEmail($user_data)
{
    ob_start();
    require_once THEME_DIR . '/admin-message.php';
    return ob_get_clean();

}

/**
 * This Auto Responder is only used for testing
 * @param $email
 * @param $first_name
 * @param bool $debug
 */
function autoResponder($email, $first_name, $debug = false)
{
    sendSMTPMail('Message Received! - ' . CONFIG['site_title'], renderAutoResponder($first_name), [$email => $first_name], [], $debug);
}

/**
 * @return array
 */
function fileAttachment()
{
    $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp', 'pdf', 'doc', 'ppt'); // valid extensions
    $path = __DIR__ . '/../uploads/';
    $uploads = [];
    foreach ($_FILES as $fileFieldName => $data) {
        if (!empty((array)$data)) {
            $files = [];
            if (is_array($data['name'])) {
                for ($i = 0; $i < count($data['name']); $i++) {
                    if (!empty($data['name'][$i])) {
                        $files[] = [
                            'name' => $data['name'][$i],
                            'tmp_name' => $data['tmp_name'][$i],
                        ];
                    }
                }
            } else {
                if (!empty($data['name'])) {
                    $files[] = [
                        'name' => $data['name'],
                        'tmp_name' => $data['tmp_name'],
                    ];
                }
            }

            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }

            foreach ($files as $file) {
                $img = $file['name'];
                $tmp = $file['tmp_name'];
                $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
                $finale_fila_name = ucfirst($fileFieldName) . '_' . date('Y-m-d_H-i-s') . '_' . uniqid(4) . '.' . $ext;
                if (in_array($ext, $valid_extensions) || 1) {
                    $fullpath = $path . $finale_fila_name;
                    if (move_uploaded_file($tmp, $fullpath)) {
                        $uploads[] = $fullpath;
                    }
                }
            }
        }
    }
    return $uploads;
}

/**
 * @param $files
 */
function unlinkFiles($files)
{
    foreach ((array)$files as $file) {
        if (file_exists($file)) unlink($file);
    }
}

/**
 * @param $key
 * @return bool
 */
function isIgnoredKey($key)
{
    return preg_match('/(.*)recaptcha(.*)/i', $key) !== 0;
}