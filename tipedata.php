<html>
<head>
	<title>Konversi Tipe</title>
</head>
<body>
<?php
$a = 300.4; //deklarasi nilai a
echo $a;
echo "<br>"; //membuat paragraf baru
echo "Tipe Double : ", doubleval($a), "<br>"; //print tipe data double
echo "Tipe Integer : ", intval($a),"<br>"; //print tipe data integer
echo "Tipe String : ", strval($a); //print tipe data string
?> 
</body>
</html>