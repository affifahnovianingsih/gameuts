<?php
	session_start();

	if(isset($_SESSION["nama"])){
	}else{
		$_SESSION['nama'] = $_POST['nama'];
		$_SESSION['email'] = $_POST['email'];
	}

	$bilPertama = rand(0,20);
	$bilKedua = rand(0,20);
	$jumlah= $bilPertama+$bilKedua;
	$_SESSION["jumlah"] = $jumlah;

	if($_SESSION["lives"] ==0){
		echo $_SESSION['lives'];
		header('Location: gameover.php'); 
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Game Math</title>
</head>
<body>
	<form method="post" action="jawaban.php">	
		Hello <?php echo $_SESSION["nama"]; ?>,tetap semangat ya.... you can do the best!! </br>
		Lives: <?php echo $_SESSION["lives"]; ?> | Score: <?php echo $_SESSION["score"]; ?> </br></br>
		Berapakah <?php echo $bilPertama; ?> + <?php echo $bilKedua; ?></br>
		<input type="number" name="jumlah" value="jumlah" >
		<input type="submit" name="kirim" value="Submit">
	</form>
</body>
</html>