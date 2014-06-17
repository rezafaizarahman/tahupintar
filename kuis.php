<?php
	include "fungsi.php";
	$conn = connectdb();


	
	$rand = rand(1,6);
	$num = $_GET['num'];
	$kateg = $_GET['kateg'];
	$soal=$conn -> query("SELECT * FROM soal where id_gbr=".$num." AND id_x=".$rand);
	$soal=$soal -> fetch(PDO::FETCH_ASSOC);

	$kanan=$conn -> query("SELECT * FROM gambar where id_gbr=".$soal['right']);
	$kanan=$kanan -> fetch(PDO::FETCH_ASSOC);

	$kiri=$conn -> query("SELECT * FROM gambar where id_gbr=".$soal['left']);
	$kiri=$kiri -> fetch(PDO::FETCH_ASSOC);

	$jawab=$conn -> query("SELECT * FROM gambar where id_gbr=".$soal['id_gbr']);
	$jawab=$jawab -> fetch(PDO::FETCH_ASSOC);
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
                    <div class="col-md-5" style="padding-top: 20px">
                        <a href="logika-kuis.php?num=<?php echo $num.'&jwb='.$soal['left'].'&ids='.$soal['id_soal']; ?>"><img class="img-responsive center-block" src="img/kategori/transportasi/gambar/<?php echo $kiri['src_gbr']; ?>" height="180" width="174" alt=""></img></a>
                    </div>
                    <div class="col-md-2">
                        <!-- <img class="img-responsive center-block" src="img/kategori/transportasi/gambar/transportasi.sepedamotor.gambar.png" height="180" width="174" alt=""></img> -->
                    </div>
                    <div class="col-md-5" style="padding-top: 20px">
                        <a href="logika-kuis.php?num=<?php echo $num.'&jwb='.$soal['right'].'&ids='.$soal['id_soal']; ?>"><img class="img-responsive center-block" src="img/kategori/transportasi/gambar/<?php echo $kanan['src_gbr']; ?>" height="180" width="174" alt=""></img></a>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
            <div class="row centered">
                <div class="col-md-12" style="padding-top: 40px; padding-bottom: 40px">
                    <img class="img-responsive center-block" src="img/kategori/transportasi/tulisan/<?php echo $jawab['src_tulisan'] ?>" height="42" width="128" alt=""></img>
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


