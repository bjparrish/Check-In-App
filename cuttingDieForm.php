<?php
if(isset($_POST['submit'])){
	$emailbody = 'Customer Name: '.$_POST['customer']. "\n"
	.'Cutting Die Press: '.$_POST['cdPress']."\n"
	.'Cutting Die Number: '.$_POST['cdnum'].;
	
	mail('parrish0083@yahoo.com','Subject line',$emailbody);
	header('location: itemCheckedIn.html);
}else	{
	header('location: checkin.html');






?>