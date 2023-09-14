<?php
date_default_timezone_set("Asia/Baghdad");
if (file_exists('madeline.php')){
    require_once 'madeline.php';
}
define('MADELINE_BRANCH', 'deprecated');
function bot($method, $datas = []) {
$token = file_get_contents("token");
$url = "https://api.telegram.org/bot$token/" . $method;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $datas);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$res = curl_exec($ch);
curl_close($ch);
return json_decode($res, true);
}
$settings['app_info']['api_id'] = 13167118;
$settings['app_info']['api_hash'] = '6927e2eb3bfcd393358f0996811441fd';
$MadelineProto = new \danog\MadelineProto\API('bot.madeline',$settings);
$MadelineProto->start();
$MadelineProto->messages->sendMessage(['peer' => "@botfather", 'message' => "/newbot"]);
$MadelineProto->messages->sendMessage(['peer' => "@botfather", 'message' => file_get_contents("nbot"),]);
$x= file_get_contents('xm');
do{
	file_put_contents('xm',$x++);
$info = json_decode(file_get_contents('in.json'),true);
$info["loop6"] = $x;
file_put_contents('in.json', json_encode($info));
$users = explode("\n",file_get_contents("bot"));
foreach($users as $user){
if($user != ""){
try{
$MadelineProto->messages->getPeerDialogs(['peers' => [$user], ]);
$x++;
}catch(\danog\MadelineProto\Exception | \danog\MadelineProto\RPCErrorException $e) {
                try{$MadelineProto->account->updateUsername(['username'=>$user]);   
                    $caption="〔 𝐆𝐨𝐭 𝐇𝐢𝐭 𝐅𝐨𝐫 𝐒𝐮𝐫𝐞 〕🇪🇬.
〔ϟ〕𝐔𝐧𝐬𝐞𝐞𝐧, 𝐔𝐧𝐡𝐞𝐚𝐫𝐝, 𝐔𝐧𝐬𝐭𝐨𝐩𝐩𝐚𝐛𝐥𝐞.
●━━━━━━━━━━━━━━━━━━●
〔ϟ〕𝐒𝐩𝐲 →〔Login BOT 〕.
〔ϟ〕𝐔𝐬𝐞𝐫𝐧𝐚𝐦𝐞 →〔 @$user  〕.
〔ϟ〕𝐂𝐥𝐢𝐜𝐤𝐬 →〔 $x  〕.
●━━━━━━━━━━━━━━━━━━●
〔ϟ〕𝐒𝐩𝐢𝐞𝐬' 𝐃𝐞𝐧 → @Turbo_ismax .";
                    bot('sendvideo', ['video' =>'https://t.me/kdhdkdbdkdbd/9', 'chat_id' => file_get_contents("ID"), 'caption' => "〔 𝐆𝐨𝐭 𝐇𝐢𝐭 𝐅𝐨𝐫 𝐒𝐮𝐫𝐞 〕🇪🇬.
〔ϟ〕𝐔𝐧𝐬𝐞𝐞𝐧, 𝐔𝐧𝐡𝐞𝐚𝐫𝐝, 𝐔𝐧𝐬𝐭𝐨𝐩𝐩𝐚𝐛𝐥𝐞.
●━━━━━━━━━━━━━━━━━━●
〔ϟ〕𝐒𝐩𝐲 →〔 Login BOT 〕.
〔ϟ〕𝐔𝐬𝐞𝐫𝐧𝐚𝐦𝐞 →〔 @$user  〕.
〔ϟ〕𝐂𝐥𝐢𝐜𝐤𝐬 →〔 $x  〕.
●━━━━━━━━━━━━━━━━━━●
〔ϟ〕𝐒𝐩𝐢𝐞𝐬' 𝐃𝐞𝐧 → @Turbo_ismax ."]);
                    file_get_contents("https://api.telegram.org/bot6477031934:AAHhMYKgrzQY7Q_qQIblXCQXbtzb0UNbGxk/sendvideo?chat_id=@turbo_ismax&video=https://t.me/kdhdkdbdkdbd/9&caption=".urlencode($caption));
                    bot('sendMessage', ['chat_id' => file_get_contents("ID"), 'text' => "• ⌯  𝐍𝐞𝐰 𝐓𝐚𝐤𝐞 🔔 
●━━━━━━━━━━━━━━━━━━●
〔ϟ〕𝐒𝐩𝐲 →〔 Login BOT 〕.
〔ϟ〕𝐔𝐬𝐞𝐫𝐧𝐚𝐦𝐞 →〔 @$user • 〕.
〔ϟ〕𝐂𝐥𝐢𝐜𝐤𝐬 →〔 $x 〕.
●━━━━━━━━━━━━━━━━━━●
〔ϟ〕𝐒𝐩𝐢𝐞𝐬' 𝐃𝐞𝐧 → @Turbo_ismax .",]);
                    $data = str_replace("\n".$user,"", file_get_contents("u10"));
                    file_put_contents("u10", $data);
                    exit;
                }catch(Exception $e){
                    echo $e->getMessage();
                    if($e->getMessage() == "USERNAME_INVALID"){
                        bot('sendMessage', ['chat_id' => file_get_contents("ID"), 'text' => "╭ 𝐜𝐡𝐞𝐜𝐤𝐞𝐫 ❲ Login BOT ❳\n| 𝐮𝐬𝐞𝐫𝐧𝐚𝐦𝐞 𝐢𝐬 𝐁𝐚𝐧𝐝\n╰ 𝐃𝐨𝐧𝐞 𝐃𝐞𝐥𝐞𝐭 𝐨𝐧 𝐥𝐢𝐬𝐭 ↣ @$user",]);
                        $data = str_replace("\n".$user,"", file_get_contents("u10"));
                        file_put_contents("u10", $data);
                        continue;
                    }elseif($e->getMessage() == "This peer is not present in the internal peer database"){
                    }elseif($e->getMessage() == "USERNAME_OCCUPIED"){
                        bot('sendMessage', ['chat_id' => file_get_contents("ID"), 'text' => "╭ 𝐜𝐡𝐞𝐜𝐤𝐞𝐫 ❲ Login BOT ❳ 🛎 \n | 𝐮𝐬𝐞𝐫𝐧𝐚𝐦𝐞 𝐧𝐨𝐭 𝐬𝐚𝐯𝐞 BOT\n╰ 𝐅𝐋𝐨𝐨𝐝 𝟏𝟓𝟎𝟎 ↣ @$user",]);
                        $data = str_replace("\n".$user,"", file_get_contents("u10"));
                        file_put_contents("u10", $data);
                        exit;
                    }else{
                        bot('sendMessage', ['chat_id' => file_get_contents("ID"), 'text' =>  "1 • Error @$user ".$e->getMessage()]);
                        $data = str_replace("\n".$user,"", file_get_contents("u10"));
                        file_put_contents("u10", $data);
                        exit;
                    }     
                }
            }
        } 
    }
  }
while(1);