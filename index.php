<?php


$file = fopen("token.bin", "rb");
$token = fread($file, 46);
fclose($file);

$website = "https://api.telegram.org/bot" . $token;

$content = file_get_contents('php://input');

$update = json_decode($content, true);


if($update) {
    $chatID = $update["message"]["from"]["id"];
    $message = $update["message"]["text"];
}


function send_message($text) {
    $url = $website . "/sendMessage?chat_id=" . $me . "?text=" . $text;
}


if($message == "oi") {
    send_message("Fatto");
}



$me = "267593079";