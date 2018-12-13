# TGX-Free
Create Best Bot With TGX Library

<html>



<b>Connect Bot 🔘</b>
<pre>$MonsterX = new TGX("123456:abcdefg1936191719"); </pre>

<b> You Can set proxy for connect to api Telegram👇</b>
<pre>$MonsterX->Proxy($url, $port = 80, $username = null, $password = null, $type = 'HTTP');</pre>

<b> You can connect api telegram 👇 </b>
<pre>$Monsterx->api($method, $datas = []);</pre>

<b> You can open Link and Extract Data 👇 </b>
<pre>$MonsterX->GetLink($url);</pre>

<b>You need Set Data for send to api telegram (for example fileid, text and more)</b>


<pre>$MonsterX->SetData("Hello World😍👌");</pre>

<b>You can set From id (chat) for forwardmessage and more...</b>
<pre>$MonsterX->SetFromChatID($chat_id);</pre>

<b>You Can Set Caption for Files 👇</b>
<pre>$MonsterX->SetCaption("This File Only For You❤");</pre>

<b>You need Set Chat ID for send for users 👇 </b>
<pre>$MonsterX->SetChatID(128192991);</pre>

<b> You can set MessageID for editmessage and more...👇 </b>
<pre>$MonsterX->SetMessageID(1828181);</pre>

<b> You can set ParseMode for SetData(text) 👇 </b>
<pre>$MonsterX->ParseMode("markdown");</pre>

<b> You can set Duration of video/music and more...👇</b>
<pre>$MonsterX->Duration(20);</pre>

<b> You can Reply to Message with message id 👇 </b>
<pre>$MonsterX->ReplyToMessage(1826);</pre>

<b> You can add new ones to the previous data 👇 </b>
<pre>
$MonsterX->SetData("Hello ");

$MonsterX->AddData("World!");

$MonsterX->SendMessage();
//Hello World!

</pre>

<b> You can add new ones to the previous caption 👇 </b>
<pre>
$MonsterX->SetCaption("Hello ");

$MonsterX->AddCaption("World!");

$MonsterX->SendPhoto();
//file photo and caption Hello World!

</pre>

  


<b> You can add keyboard for send (ReplyMarkup) 👇 </b>
<pre>$MonsterX->ReplyMarkup(['keyboard'=>[
                [
                ['text'=>'1'],['text'=>'2']
                ],
                [
                ['text'=>'3'],['text'=>'4']
                ],

              ]]);
</pre>



<b> If you do not like to open the links in your message before send, use this 👇 </b>
<pre>$MonsterX->DisableWebPagePreview(true);</pre>

<b> After settings,you can use this for send data to telegram<b>
<pre>
$MonsterX->SendMessage();
$MonsterX->EditMessage($inline=false);
$MonsterX->SendDocument();
$MonsterX->SendSticker();
$MonsterX->SendVideo($width = null, $height = null);
$MonsterX->SendVoice();
$MonsterX->SendContact($first_name, $last_name = null); (SetData = phone_number)
$MonsterX->IsJoinUser($channel);
$MonsterX->ForwardMessage();
</pre>

<b>You can use this variable to get the message id from the last message send</b>
<pre>
$MonsterX->SetChatID($chat_id);
$MonsterX->SetData(1);
$MonsterX->SendMessage();
$MID = $MonsterX->SendMessageMI;
$MonsterX->SetMessageID($MID);
$MonsterX->SetData(2);
$MonsterX->EditMessage();
$MonsterX->SetData(3);
$MonsterX->EditMessage();
$MonsterX->SetData(4);
$MonsterX->EditMessage();
$MonsterX->SetData(5);
$MonsterX->EditMessage();
}
</pre>

</html>
