<?php
/**
 * Created by PhpStorm.
 * User: joaosilva
 * Date: 19/12/18
 * Time: 16:27
 */

$email = $_POST["inputEmail"];



$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array(
    'secret'   => '6LdrYoMUAAAAAH9RNvXhUj3pDmlgmpnziwzHswHk',
    'response' => $_POST['g-recaptcha-response'],
    'remoteip' => $_SERVER["REMOTE_ADDR"]
)));

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$recaptcha = json_decode(curl_exec($ch), true);

curl_close($ch);


if($recaptcha["success"]) {
    var_dump("ok"); exit;
}
header("Location: re_captcha.php");

