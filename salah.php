<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Game Math</title>
</head>
<body>
	Hello <?php echo $_SESSION["nama"]; ?>,Sayang jawaban anda salah... tetap semangat ya !!!.</br>
    Lives: <?php echo $_SESSION["lives"]; ?> | Score: <?php echo $_SESSION["score"]; ?></br>
    <a href="soal.php">Soal selanjutnya</a>
</body>
</html>