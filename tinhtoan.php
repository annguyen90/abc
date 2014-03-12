<?php
function cong($a,$b){
	$c=$a+$b;
	return $c;
}
function tru($a,$b){
	$c=$a-$b;
	return $c;
}
function nhan($a,$b){
	$c=$a*$b;
	return $c;
}
if(isset($_POST['tinh']) and isset($_POST)){
	$var1 = $_POST['var1'];
	$var2 = $_POST['var2'];
	$pheptoan = $_POST['pheptoan'];
	switch ($pheptoan){
		case "cong":
		echo cong($var1,$var2);
		break;
		case "tru":
		echo tru($var1,$var2);
		break;
		case "nhan":
		echo nhan($var1,$var2);
		break;
		default:
		echo "ko thuc hien dc.";
	}
		
}
?>