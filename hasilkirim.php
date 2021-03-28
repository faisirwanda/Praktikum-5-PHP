<?php
if (empty($_POST['nama'])) { //kondisi apabila user telah menginputkan nama atau tidak di halaman web sebelumnya
	header("Location:kosong.php"); //lokasi apabila textbox nama kosong
} else{ //tampilan dan posisi nama yang telah di inputkan
	echo "<center>Nama ".$_POST['nama']."</center><br>";
}
?>