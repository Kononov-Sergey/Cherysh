<?php

/* https://api.telegram.org/bot1507026211:AAGxNELSSGd-lxR1WN1-w_uyR3Uc4ppBepg/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['name'];
$phone = $_POST['phone'];
$msg = $_POST['msg'];
$token = "1507026211:AAGxNELSSGd-lxR1WN1-w_uyR3Uc4ppBepg";
$chat_id = "-465174288";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
  'Сообщение:' => $msg
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: Thanks.html');
} else {
  echo "Error";
}
?>