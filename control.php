<?php
include_once('model.php');
$r2 = new tinh();
 if(isset($_POST['tinh']) and isset($_POST)){
	$var1 = $_POST['var1'];
	$var2 = $_POST['var2'];
	$pheptoan = $_POST['pheptoan'];
	switch ($pheptoan){
		case "cong":
		$r2->cong($var1,$var2);
		break;
		case "tru":
		$r2->tru($var1,$var2);
		break;
		case "nhan":
		$r2->nhan($var1,$var2);
		break;
		default:
		echo "ko thuc hien dc.";
	}
		
}
include('view.php');
?>
