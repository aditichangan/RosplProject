<?php
include 'newtest.php';

$receiverarr = array( "aditichangan-inft@atharvacoe.ac.in", "chilllilly1002@gmail.com","changanaditi@gmail.com");
$name = array("Aditi" ,"lilly","Customer");

$result = Letter::sendmailtomultiple("aditichangan-inft@atharvacoe.ac.in",$receiverarr,"Test mail","Nice to reach out to you. You successfully comppleted program!!",$name);



//$result = Letter::sendmail("aditichangan-inft@atharvacoe.ac.in","changanaditi@gmail.com","Helooo","hsjdnfkjn","name");

?>