<?php


$file = fopen("token.bin", "rb");
$token = fread($file, 46);
fclose($file);

$url = "https://api.telegram.org/bot" . $token;

$content = file_get_contents('php://input');

$update = json_decode($content, true);


if($update) {
    $chatID = $update["message"]["from"]["id"];
    $message = $update["message"]["text"];
}



$me = "267593079";