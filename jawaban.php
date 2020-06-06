<?php
session_start();
if ($_POST['jumlah'] == $_SESSION["jumlah"]) {
    $_SESSION['score']+=10;
        header("location: benar.php");
    }else{
        $_SESSION['lives']-=1;
        $_SESSION['score']-=2;
        if($_SESSION['lives']>0){
            header("location: salah.php");
		}
    }
