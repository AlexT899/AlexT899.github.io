<?php 
$user_name = htmlspecialchars($_POST["username"]);
$user_phone = htmlspecialchars($_POST["userphone"]);

$token = "8008475225:AAGszYnl3yDIF-V0WpALyNRKWX47rJ0xw1Y";
$chat_id = "-4539025241";

$formData = array(
  "Клиент: " => $user_name,
  "Телфон: " => $user_phone
);

foreach($formData as $key => $value) {
  $text .= $key . "<b>" . urlencode($value) . "</b>" . "%0A"; 
}

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&text={$text}&parse_mode=html", "r");

if ($sendToTelegram) {
  echo "Success";
} else {
  echo "Error";
}

echo "Привет, " . $user_name . "<br>";
echo "Ваш Телефон: <b> " . $user_phone . "</b>";