<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="POST" action="hasilkirim.php"> <!-- deklarasi method post dan file tujuan -->
	<table width="400" align="center" cellpadding="2" cellspacing="2"> <!-- pengaturan posisi dan format-->
		<tr> <!-- membuat textbox untuk mengisi nama -->
			<td width="130">Nama</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr> <!--membuat button kirim dan reset-->
			<td colspan="2" align="center">
				<input type="submit" name="btnlogin" value="kirim">
				<input type="reset" name="reset" value="Reset">
			</td>
		</tr>
	</table>	
</form>
</body>
</html>