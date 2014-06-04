<?
	include "fungsi.php";
	$conn = connectdb();
	

	$numb=$conn -> query("SELECT * FROM gambar where id_gbr=".$_GET['num']);
	$numb=$numb -> fetch(PDO::FETCH_ASSOC);
	$num = $_GET['num'];
	if ($num == 1){$next=2;$prev=6;
	} else if ($num == 6){$next=1;$prev=5;
	} else {$next=$num+1;$prev=$num-1;}

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
                    <img class="img-responsive center-block" src="img/kategori/judul/judul.transportasi.png" height="68" width="289" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="judul">
        <div class="container">
            <div class="row centered">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="col-md-3" style="padding-top: 60px">
                        <a href="belajar.php?num=<?php echo $prev ?>"><img class="img-responsive center-block" src="img/tombol.kembali.kategori.png" height="48" width="46" alt=""></a>
                    </div>
                    <div class="col-md-6">
                        <img class="img-responsive center-block" src="img/kategori/transportasi/gambar/<?php echo $numb['src_gbr']; ?>" height="180" width="174" alt=""></img>
                    </div>
                    <div class="col-md-3" style="padding-top: 60px">
                        <a href="belajar.php?num=<?php echo $next ?>"><img class="img-responsive center-block" src="img/tombol.lanjut.kategori.png" height="48" width="46" alt=""></a>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
            <div class="row centered">
                <div class="col-md-12" style="padding-top: 40px; padding-bottom: 40px">
                    <img class="img-responsive center-block" src="img/kategori/transportasi/tulisan/<?php echo $numb['src_tulisan']; ?>" height="42" width="128" alt=""></img>
                </div>
            </div>
            <div class="row centered">
                <div class="row centered" style="padding-top: 30px">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <div class="col-md-4">
                        </div>
                        <div class="col-md-4">
                            <a href="index.php"><img class="img-responsive center-block" src="img/tombol.menu.png" height="36" width="34" alt=""></a>
                        </div>
                        <div class="col-md-4">
                        </div>
                    </div>
                    <div class="col-md-4"></div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
