<?php
 class Utility {
   function displayMsg($msgCode, $msgType, $msg){
	$displayInfo = array();
	$displayInfo["msgCode"]=$msgCode;
	$displayInfo["msgType"]=$msgType;
	$displayInfo["msg"]=$msg;
	return json_encode($displayInfo);  
   }
 }
?>