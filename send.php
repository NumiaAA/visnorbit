/* https://api.telegram.org/bot5839346867:AAFH8s5vHg70WPwXvzacuDve2OPYx7y2NLI/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

<?php

$phone = $_POST['phone'];
$token = "6045975076:AAGNWbj3ohaRL52Me4PsXKLrqq_9k0B-ET0";
$chat_id = "-1001824517622";
$arr = array(
  'Телефон: ' => $phone
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: index.html');
} else {
  echo "Error";
}
?>