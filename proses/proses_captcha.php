<?php
function acakCaptcha() {
    $str = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";

    $pass = array();
    $panjangalpha = strlen($str) - 2;
    for ($i = 0; $i < 6; $i++) {
        $n = rand(0, $panjangalpha);
        $pass[] = $str[$n];
    }
    return implode($pass);
}

// Start the session
session_start();

$code = acakCaptcha();
$_SESSION['captcha'] = $code;

$wh = imagecreatetruecolor(160, 50);
$bgc = imagecolorallocate($wh, 44, 62, 80); // Background color
$fc = imagecolorallocate($wh, 223, 230, 233);   // Font color

imagefill($wh, 0, 0, $bgc);
imagestring($wh, 10, 50, 15, $code, $fc);

// Set content type header
header('content-type: image/jpeg');

// Output the image with quality parameter
imagejpeg($wh, null, 80);

// Destroy the image to free up memory
imagedestroy($wh);
?>