<?php
class Letter{

public static function sendmail($sender,$receiver,$subject,$body,$name=" "){
$newname= "Dear ". $name.", ". PHP_EOL;
$newbody=$newname.$body;

if (mail($receiver, $subject, $body, $sender)) {
    echo "Email successfully sent to $receiver";
} else {
    echo "Email sending failed...";
    return "error";
}}

public static function sendmailtomultiple($sender,$receiver,$subject,$body,$name=" "){

for($x=0 ; $x<count($receiver);$x++){

$newname= "Dear ". $name[$x].", ". PHP_EOL;
$newbody=$newname.$body;
if (mail($receiver[$x], $subject, $newbody, $sender)) {

    echo "Email successfully sent to $receiver[$x]<br>";
} 
else {
    echo "Email sending failed..."; 
    return "error";
}
}
}

}
?>
