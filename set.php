<?php
// Load composer
require __DIR__ . '/vendor/autoload.php';

$bot_api_key  = '6579229262:AAEyEKuyxJLXf6utQMeUQ5OE9lqmjjn4LGc';
$bot_username = '@Cobasaja134_bot';
$hook_url     = 'https://your-domain/path/to/hook.php';

try {
    // Create Telegram API object
    $telegram = new Longman\TelegramBot\Telegram($bot_api_key, $bot_username);

    // Set webhook
    $result = $telegram->setWebhook($hook_url);
    if ($result->isOk()) {
        echo $result->getDescription();
    }
} catch (Longman\TelegramBot\Exception\TelegramException $e) {
    // log telegram errors
    // echo $e->getMessage();
}
$result = $telegram->setWebhook($hook_url, ['certificate' => '/path/to/certificate']);
