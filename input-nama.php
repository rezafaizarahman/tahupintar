<?php
	include "fungsi.php";
	if (isset($_GET['masuk'])){
		if($_GET['nama']!=""){
			creatcookie(0,$_GET['nama']);
			header("location:kategori-kuis.php");
		}
	}
?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Tahu Pintar!</title>
    <!-- css -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
    <script type="text/javascript" src="js/bootstrap.js"></script>
</head>

<body>
	<form action="input-nama.php">
		<table>
			<tr><td>Nama</td><td>: <input type="text" name="nama"></td></tr>
			<tr><td colspan=2 align="right"><input type="submit" name="masuk" value="masuk"></td></tr>
		</table>
	</form>

</body>

</html>
