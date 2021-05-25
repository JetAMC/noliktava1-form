<?php

$area = $_GET['area-tilda-select'];
$term = $_GET['term-tilda-select'];
$size = $_GET['size-tilda-select'];
$phone = $_GET['phone-tilda-select'];

$message = "<b>Area:</b> ".$area."<br/><b>Term:</b> ".$term."<br/><b>Size:</b> ".$size." m2<br/><b>Phone:</b> ".$phone."";

$to = 'info@noliktava1.lv';
$topic = "Noliktava test lead";

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
$headers .= 'From: Noliktava1' . "\r\n";

mail($to, $topic, $message, $headers);

// Send data to telegram
$BotToken = "1795979229:AAFaTY94-ZR8utsnYpRP-R0THb1y4-_8fOc";
$chat_id = "-1001342967019";

$text = "New lead\r\n\r\n*Area:* ".$area."\r\n*Size:* ".$size." m2\r\n*Term:* ".$term."\r\n*Phone:* ".$phone."";

$Update = file_get_contents("https://api.telegram.org/bot".$BotToken."/sendMessage?chat_id=".$chat_id."&text=".urlencode($text)."&parse_mode=Markdown");

echo $Update;

// Send in from tilda to next form step
header("Location: index.php?$area&$term&$size&$phone");

exit();

?>

