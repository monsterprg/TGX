<?php

include "TGX.php";

$MonsterX = new TGX('TOKEN_HERE');

$MonsterP = new TGX_plugins();

$MonsterP->github('sebastianwyder','googl-php','Googl.class.php');

$googl = new Googl('API_KEY_GOOGLE');

//https://developers.google.com/url-shortener/v1/getting_started

$update = json_decode(file_get_contents("php://input"));

@$message = $update->message;

@$message_id = $message->message_id;

@$chat_id = $update->message->chat->id;

@$chat_type = $update->message->chat->type;

@$from_id = $update->message->from->id;

@$text = $message->text;

@$data = $update->callback_query->data;


if($text == "/start"){

$MonsterX->SetChatID($chat_id);

$MonsterX->SetData("
Hello! 
سلام 😝
لینک مورد نظر خود را برای کوتاه کردن بفرستید
");

$MonsterX->SendMessage();

}else{

$MonsterX->SetChatID($chat_id);

$short = $googl->shorten($text);

if($short){

$MonsterX->SetData("
✅ لینک شما با موفقیت کوتاه شد :
$short
");

}else{

$MonsterX->SetData("
❌ کوتاه کردن لینک با اشکال مواجه شد
بررسی کنید که ابتدای لینک http:// یا https:// وجود دارد یا خیر
");

}

$MonsterX->SendMessage();

}


?>
