<html>
<head>
	<title>Pemrogaman PHP dengan Array</title>
</head>
<body>
<?php
//penulisan array 
$nama[] = "Agung Teguh"; //deklarasi array tipe string
$nama[] = "Wibowo";
$nama[] = "Almais";
echo $nama[1] . $nama[2] . $nama[0];//print array sesuai posisi yang sudah ditulis
echo "<br>"; //membuat paragraf baru
// menghitung jumlah elemen array
$jum_array = count($nama);
echo "Jumlah Elemen Array = ".$jum_array;//print jumlah array
?>
</body>
</html>