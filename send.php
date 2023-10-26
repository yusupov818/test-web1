<?php
$token = "6018110104:AAHswl_eKT9WMRXzePQbn54Vq-x5uOMUTO4";
$chat_id = "-1001934898535";

function clear_data($val){
  $val = trim($val);
  $val = stripslashes($val);
  $val = htmlspecialchars($val);
  return $val;
}
if(!empty($_POST)){
  $name = clear_data($_POST["name"]);   
  $phone = clear_data($_POST["phone"]);
  $message = clear_data($_POST["message"]);
  $txt = "";
  $arr = [
    'Имя:' => $name,
    'Телефон:' => $phone,
    'Сообщения:' => $message,
  ];
  foreach($arr as $key => $value) {
    $txt .= "<b>".$key."</b> ".$value."%0A";
  }
  if(!empty($token) && !empty($chat_id)){
    $url = "https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}";
    $sendToTelegram = file_get_contents($url);
    if ($sendToTelegram) {
      echo json_encode('Успешно');
    } else {
     return false;
  
    }
  }
 
}
