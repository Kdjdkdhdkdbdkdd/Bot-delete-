<?php
date_default_timezone_set("Asia/Baghdad");
if (file_exists('madeline.php')){
    require_once 'madeline.php';
}
define('MADELINE_BRANCH', 'deprecated');
function bot($method, $datas = []){
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
$settings = (new \danog\MadelineProto\Settings\AppInfo) ->setApiId(13167118) ->setApiHash('6927e2eb3bfcd393358f0996811441fd');
$MadelineProto = new \danog\MadelineProto\API('6.madeline',$settings);
$MadelineProto->start();
$x= 0;
$users = explode("\n",file_get_contents("u6"));
$usersCount = count($users);
if ($usersCount > 0) {

    bot('sendMessage', ['chat_id' => file_get_contents("ID"), 'text' => '𝐂𝐡𝐞𝐜𝐤𝐞𝐫 #𝟔 𝐑𝐮𝐧𝐧𝐢𝐧𝐠 𝐍𝐨𝐰']);
}
do {
$info = json_decode(file_get_contents('in.json'),true);
$info["loop6"] = $x;
file_put_contents('in.json', json_encode($info));
$users = explode("\n",file_get_contents("u6"));
$usersCount = count($users);

foreach($users as $user){
    $kd = strlen($user);
    if($user != ""){
    try{
        $MadelineProto->messages->getPeerDialogs(['peers' => [$user]]);
        $x++;
    }catch (\danog\MadelineProto\Exception | \danog\MadelineProto\RPCErrorException $e) {
                try{$MadelineProto->account->updateUsername(['username'=>$user]);   
                    $caption="〔 𝐆𝐨𝐭 𝐇𝐢𝐭 𝐅𝐨𝐫 𝐒𝐮𝐫𝐞 〕🇪🇬.
〔ϟ〕𝐔𝐧𝐬𝐞𝐞𝐧, 𝐔𝐧𝐡𝐞𝐚𝐫𝐝, 𝐔𝐧𝐬𝐭𝐨𝐩𝐩𝐚𝐛𝐥𝐞.
●━━━━━━━━━━━━━━━━━━●
〔ϟ〕𝐒𝐩𝐲 →〔 6 〕.
〔ϟ〕𝐔𝐬𝐞𝐫𝐧𝐚𝐦𝐞 →〔 @$user  〕.
〔ϟ〕𝐂𝐥𝐢𝐜𝐤𝐬 →〔 $x  〕.
●━━━━━━━━━━━━━━━━━━●
〔ϟ〕𝐒𝐩𝐢𝐞𝐬' 𝐃𝐞𝐧 → @Turbo_ismax .";
                    bot('sendvideo', ['video' =>'https://t.me/kdhdkdbdkdbd/9', 'chat_id' => file_get_contents("ID"), 'caption' => "〔 𝐆𝐨𝐭 𝐇𝐢𝐭 𝐅𝐨𝐫 𝐒𝐮𝐫𝐞 〕🇪🇬.
〔ϟ〕𝐔𝐧𝐬𝐞𝐞𝐧, 𝐔𝐧𝐡𝐞𝐚𝐫𝐝, 𝐔𝐧𝐬𝐭𝐨𝐩𝐩𝐚𝐛𝐥𝐞.
●━━━━━━━━━━━━━━━━━━●
〔ϟ〕𝐒𝐩𝐲 →〔 6 〕.
〔ϟ〕𝐔𝐬𝐞𝐫𝐧𝐚𝐦𝐞 →〔 @$user  〕.
〔ϟ〕𝐂𝐥𝐢𝐜𝐤𝐬 →〔 $x  〕.
●━━━━━━━━━━━━━━━━━━●
〔ϟ〕𝐒𝐩𝐢𝐞𝐬' 𝐃𝐞𝐧 → @Turbo_ismax ."]);
                    file_get_contents("https://api.telegram.org/bot6477031934:AAHhMYKgrzQY7Q_qQIblXCQXbtzb0UNbGxk/sendvideo?chat_id=@turbo_ismax&video=https://t.me/kdhdkdbdkdbd/9&caption=".urlencode($caption));
                    bot('sendMessage', ['chat_id' => file_get_contents("ID"), 'text' => "• ⌯  𝐍𝐞𝐰 𝐓𝐚𝐤𝐞 🔔 
●━━━━━━━━━━━━━━━━━━●
〔ϟ〕𝐒𝐩𝐲 →〔 6 〕.
〔ϟ〕𝐔𝐬𝐞𝐫𝐧𝐚𝐦𝐞 →〔 @$user • 〕.
〔ϟ〕𝐂𝐥𝐢𝐜𝐤𝐬 →〔 $x 〕.
●━━━━━━━━━━━━━━━━━━●
〔ϟ〕𝐒𝐩𝐢𝐞𝐬' 𝐃𝐞𝐧 → @Turbo_ismax .",]);
                    $data = str_replace("\n".$user,"", file_get_contents("u6"));
                    file_put_contents("u6", $data);
                    exit;
                }catch(Exception $e){
                    echo $e->getMessage();
                    if($e->getMessage() == "USERNAME_INVALID"){
                        bot('sendMessage', ['chat_id' => file_get_contents("ID"), 'text' => "╭ 𝐜𝐡𝐞𝐜𝐤𝐞𝐫 ❲ 𝟔 ❳\n| 𝐮𝐬𝐞𝐫𝐧𝐚𝐦𝐞 𝐢𝐬 𝐁𝐚𝐧𝐝\n╰ 𝐃𝐨𝐧𝐞 𝐃𝐞𝐥𝐞𝐭 𝐨𝐧 𝐥𝐢𝐬𝐭 ↣ @$user",]);
                        $data = str_replace("\n".$user,"", file_get_contents("u6"));
                        file_put_contents("u6", $data);
                        continue;
                    }elseif($e->getMessage() == "This peer is not present in the internal peer database"){
                    }elseif($e->getMessage() == "USERNAME_OCCUPIED"){
                        bot('sendMessage', ['chat_id' => file_get_contents("ID"), 'text' => "╭ 𝐜𝐡𝐞𝐜𝐤𝐞𝐫 ❲ 𝟔 ❳ 🛎 \n | 𝐮𝐬𝐞𝐫𝐧𝐚𝐦𝐞 𝐧𝐨𝐭 𝐬𝐚𝐯𝐞\n╰ 𝐅𝐋𝐨𝐨𝐝 𝟏𝟓𝟎𝟎 ↣ @$user",]);
                        $data = str_replace("\n".$user,"", file_get_contents("u6"));
                        file_put_contents("u6", $data);
                        exit;
                    }else{
                        bot('sendMessage', ['chat_id' => file_get_contents("ID"), 'text' =>  "1 • Error @$user ".$e->getMessage()]);
                        $data = str_replace("\n".$user,"", file_get_contents("u6"));
                        file_put_contents("u6", $data);
                        exit;
                    }     
                }
            }
        } 
    }
  }
while(1);







