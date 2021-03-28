<?php
if (isset($_POST['btnlogin'])){//kondisi yang terjadi apabila telah menekan buton login
	$user = $_POST['nama']; //deklarasi nama menggunakan post
	$ema = $_POST['email']; //deklarasi email menggunakan post
	if($user == 'Fais irwanda' && $ema =='irwanakagami@gmail.com'){ //user name dan email yang digunakan
		echo "Selamat Datang<br>"; //output dihalaman web
		echo "Nama : ".$_POST['nama']."<br>";//output nama
		echo "email : ".$_POST['email']."<br>";//output email
		date_default_timezone_set('Asia/Jakarta'); 
echo 'Tanggal Login: ' . date('d-m-Y h:i:s');//output tanggal
	}else{
		header("Location:false.php");//apabila salah atau tidak mengisi textbox menuju file seseuai location
	}
}
?>