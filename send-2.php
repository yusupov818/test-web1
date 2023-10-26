

<?php
$botToken = '6018110104:AAHswl_eKT9WMRXzePQbn54Vq-x5uOMUTO4';

$apiUrl = 'https://api.telegram.org/bot' . $botToken . '/getUpdates';
$response = file_get_contents($apiUrl);
$data = json_decode($response, true);

if ($data && isset($data['result'][0]['message']['chat']['id'])) {
    $chatId = $data['result'][0]['message']['chat']['id'];
    echo "Your chat_id is: " . $chatId;
} else {
    echo "Failed to retrieve chat_id.";
}
?>

https://api.telegram.org/bot/6018110104:AAHswl_eKT9WMRXzePQbn54Vq-x5uOMUTO4