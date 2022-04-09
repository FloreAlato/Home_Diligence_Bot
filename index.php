<?php


$token = "";
$token = "5195372792:AAGTekbGeYlqDzzHI-BbIrXfxMY8j0_jSM0";

$website = "";
$website = "https://api.telegram.org/bot$token";

$content = file_get_contents('php://input');

$update = json_decode($content, true);

$url = "";
$message = "";
$me = "267593079";


if($update) {
    $chatID = $update["message"]["from"]["id"];
    $message = $update["message"]["text"];
}

function send_message($chat, $text) {
    $url = "https://api.telegram.org/bot5195372792:AAGTekbGeYlqDzzHI-BbIrXfxMY8j0_jSM0/sendMessage?chat_id=$chat&text=$text";
    file_get_contents($url);
}


if($message == "oi") {
    send_message($chatID, "$chatID says: $message");
}