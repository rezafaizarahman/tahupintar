<?php
	function connectdb(){
		$host="localhost";
		$user="root";
		$pass="toor";
		$db="tahupintar";

		$conn= new PDO("mysql:host=$host;dbname=$db", $user, $pass);
		
		return $conn;
	}
	function creatcookie(){
		setcookie("skor",0);
		setcookie("nama","user1");

	}
	function benar(){
		$skor = $_COOKIE['skor']+10;
		setcookie("skor",$skor);
		echo "<script>alert('Horee,, Kamu betul,,');</script>";
	}
	function salah(){
		echo "<script>alert('Yaaahh,, Kamu Salah,,');</script>";
	}
	function uploadnilai(){
		$conn = connectdb();
		$sql = $conn->query("INSERT INTO user VALUES ('','".$_COOKIE['nama']."',".$_COOKIE['skor'].")");
	}
?>
