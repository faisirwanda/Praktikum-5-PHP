<!DOCTYPE html>
<html>
<head>
	<title>Belajar Post</title>
</head>
<body>
<form method="POST" action="cek.php"> <!-- deklarasi post dan form yang akan dituju ketika login -->
	<table width="400" cellpadding="2" cellspacing="2"><!-- posisi dan format item -->
		<tr><!-- membuat textbox nama -->
			<td width="130">Nama</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr><!-- membuat textbox email -->
			<td width="130">Email</td>
			<td><input type="text" name="email"></td>
		</tr>
		<tr>
			<td><!-- membuat buton login -->
				<input type="submit" name="btnlogin" value="Login">
			</td>
		</tr>
	</table>
</form>
</body>
</html>