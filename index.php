<?
	include "fungsi.php";
	$conn = connectdb();
	
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
    <div class="judul">
        <div class="container">
            <div class="row centered">
                <div class="col-md-12">
                    <img class="img-responsive center-block" src="img/logo.png" height="99" width="448" alt=""></img>
                </div>
            </div>
        </div>
    </div>

    <div class="judul">
        <div class="container">
            <div class="row centered">
                <div class="col-md-12 centered" style="padding: 20px">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <a href="kategori-belajar.php" >
                            <img class="img-responsive center-block" src="img/tombol.belajar.png" height="45" width="185" alt=""></img>
                        </a>
                    </div>
                    <div class="col-md-4"></div>
                </div>
                <div class="col-md-12 centered" style="padding: 20px">
                    <a href="input-nama.php">
                        <img class="img-responsive center-block" src="img/tombol.kuis.png" height="45" width="185" alt=""></img>
                    </a>
                </div>
                <div class="col-md-12 centered" style="padding: 20px">
                    <a href="nilai.php">
                        <img class="img-responsive center-block" src="img/tombol.nilai.png" height="45" width="185" alt=""></img>
                    </a>
                </div>
            </div>
            <div class="row centered" style="padding: 30px">
                <div class="col-sm-1 col-sm-offset-5">
                    <a href="pengaturan.php">
                        <img class="img-responsive center-block" src="img/tombol.pengaturan.png" height="36" width="34" alt=""></img>
                    </a>
                </div>
                <div class="col-sm-1">
                    <a href="tentang.php">
                        <img class="img-responsive center-block" src="img/tombol.tentang.png" height="36" width="34" alt=""></img>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
