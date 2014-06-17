<?php
	include "fungsi.php";
	$conn = connectdb();
	
	$num=$_GET['num'];
	$jwb=$_GET['ids'];
	$ids=$_GET['jwb'];
	//$kateg=$_GET['kateg'];

	$koreksi=$conn -> query("SELECT * FROM soal where id_soal=".$_GET['ids']);
	$koreksi=$koreksi -> fetch(PDO::FETCH_ASSOC);
		
	if($_GET['jwb']==$koreksi['id_gbr']){
		benar();
	}else{
		salah();
	}
	if($num <6){
		$num++;
		echo "<script>document.location='kuis.php?num=".$num."&kateg=1';</script>";
	}else{
		uploadnilai();
		echo "<script>document.location='nilai.php';</script>";
	}
	
?>
