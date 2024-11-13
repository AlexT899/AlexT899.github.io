<?php 
$user_name = htmlspecialchars($_POST["username"]);
$user_phone = htmlspecialchars($_POST["userphone"]);

$token = "8008475225:AAGszYnl3yDIF-V0WpALyNRKWX47rJ0xw1Y";
$chat_id = "-4539025241";

fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&text={$user_name}");

echo "Привет, " . $user_name . "<br>";
echo "Ваш Телефон: <b> " . $user_phone . "</b>";