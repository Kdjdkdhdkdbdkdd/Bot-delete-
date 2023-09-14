<?php
while(1){
$x = shell_exec("pm2 show ml");
if(preg_match("/errored/", $x)) {
    shell_exec("pm2 stop 11.php");
    shell_exec("pm2 start 11.php");
    shell_exec("pm2 start ml.php");
    sleep(4500);
}elseif ("/online/") {
    shell_exec("pm2 stop 11.php");
    shell_exec("pm2 start 11.php");
    shell_exec("pm2 start ml.php");
    sleep(4500);
}elseif ("/N/A/") {
     shell_exec("pm2 stop 11.php");
    shell_exec("pm2 start 11.php");
    shell_exec("pm2 start ml.php");
      sleep(4500);
  }
}