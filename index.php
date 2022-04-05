<?php


$token = "5195372792:AAGTekbGeYlqDzzHI-BbIrXfxMY8j0_jSM0";

$website = "https://api.telegram.org/bot" . $token;

$content = file_get_contents('php://input');

$update = json_decode($content, true);


if($update) {
    $chatID = $update["message"]["from"]["id"];
    $message = $update["message"]["text"];
}

$me = "267593079";

function send_message($text) {
    $url = $website . "/sendMessage?chat_id=" . $me . "?text=" . $text;
}


if($message == "oi") {
    send_message("Fatto");
}



