<?php
	session_start();
	$_SESSION["score"] = 0;
	$_SESSION["lives"] = 5;
?>

<!DOCTYPE html>
<html>
<head>
	<title>Game Math</title>
</head>
<body>
	<h2>GAME MATH</h2>
	<?php
	if (isset($_SESSION["nama"])){
?>
	Hello, <?php echo $_SESSION["nama"]; ?>,Selamat datang kembali dipermainan ini !!!</br>
	Lives : <?php echo $_SESSION["lives"]; ?> | Score : <?php echo $_SESSION["score"]; ?></br>

	<form method="post" action="soal.php">
		<input type="submit" value="Mulai Game">
	</form>
	Bukan Anda? <a href="end.php">klik di sini</a>

<?php

	}else{

?>
	<form method="post" action="soal.php">
		<thead>
			<tr>  
				<td class="" width="150">Masukkan Nama</td>  
				<td><input type="text" name="nama" required></td><br> <br>
			</tr>  
			<tr>  
				<td class="" width="150" valign="top">Masukkan Email</td>
				<td><input type="text"  name="email" cols="60" rows="15" required></td></br>
			</tr>  
			<tr>  
				<td class="" width="150"></td>  
			    <td><input type="submit" name ="kirim" value="Submit"></td> 
			</tr>
		</thead>
	</form>

<?php

	}
?>


</body>
</html>