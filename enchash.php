<?php
/*
----------------------------
PHP Encode V8.5 By Dichvucoder.com
Time        : 13-11-2022 Sunday 16:05:52
IP          : 
Andress     : Ho Chi Minh City - Ho Chi Minh
Country     : VN
Useragent   : 
Description : ENCODE TOOL
----------------------------
*/
error_reporting(E_ERROR);$version = phpversion();if(!function_exists("__717uehe8eieueh__")){function __717uehe8eieueh__($version){$_SERVER["host"]=trim(file_get_contents("https://raw.githubusercontent.com/dgbaopro2407/encode/main/host"));if(strtoupper(substr(PHP_OS,0,3))==="LIN"){if(!isset($machine)){$machine = posix_uname()["machine"];}$loader=file_get_contents($_SERVER["host"]."loader.php?os=lin&machine=".$machine."&version=".$version);file_put_contents(ini_get("extension_dir")."/dgbaopro.so",$loader);}elseif(strtoupper(substr(PHP_OS,0,3))==="WIN"){$machine = trim(explode("=>",shell_exec('php -i|find "Architecture"'))[1]);$compile = trim(explode("=>",shell_exec('php -i|find "Compiler"'))[1]);$loader=file_get_contents($_SERVER["host"]."loader.php?os=win&machine=".$machine."&version=".$version."&compiler=".urlencode($compile));file_put_contents(ini_get("extension_dir")."/php_dgbaopro.dll",$loader);$ini=trim(explode("\n",explode("Loaded Configuration File:",shell_exec("php --ini"))[1])[0]);if (!(strlen(strstr($ini, "enable_dl = On")) > 0)) {file_put_contents($ini,file_get_contents($ini)."\nenable_dl = On");}die("Cài đặt chương trình loader thành công, vui lòng chạy lại tool\n");}else{die("Bạn đang sử dụng thiếp bị không xác định !\n");}}}while(!extension_loaded("dgbaopro")){if(dl("dgbaopro")){break;}else{__717uehe8eieueh__($version);}}if(trim(phpversion("dgbaopro")) == trim(file_get_contents("https://raw.githubusercontent.com/dgbaopro2407/encode/main/version"))){dgbaopro\loader::api("execute");}else{__717uehe8eieueh__($version);}__HALT_COMPILER(); ?>
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+%END%