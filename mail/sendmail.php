<?php
$sub="testing";
$msg="hello its bb's development";
$mail="bhargavmbhatt24@gmail.com";
$header = "From: bb2411@localhost\r\n";
$header .= "Return-Path: bbdesk@localhost";
try{
    $state=mail($mail,$sub,$msg,$header);
if($state){
    echo "email sented";
}else{
    echo "error";
}
}catch(Error $e){
    echo $e;
}
?>