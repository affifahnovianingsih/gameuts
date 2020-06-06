<?php
    session_start();
    include("koneksi.php");
    $db = new dbObj();
    $connection = $db->getConnstring();
?>
<?php
function insert_tabel($nama, $email, $skor) {
    global $connection;
    $sql = "INSERT INTO tb_game (id, nama, email, skor) VALUES (NULL, '".$nama."','".$email."','".$skor."')";
}
?>

<?php
insert_tabel($_SESSION["nama"], $_SESSION["email"], $_SESSION["score"]);
?>

<!DOCTYPE html>


<html>
<head>
    <title>Game Math</title>
</head>
<body>
    Hello, <?php echo $_SESSION["nama"]; ?>... Sayang permainan sudah selesai. Semoga kali lain bisa lebih baik.</br>
    Score Anda : <?php echo $_SESSION["score"]; ?> </br>
    <a href="index.php">Main Lagi?</a></br></br>

    HALL OF FAME </br>
    <table class=>
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Skor</th>
            </tr>
        </thead>

        <?php
        $no=1;
        $query = 'SELECT * FROM tb_game ORDER BY skor DESC LIMIT 10';
        $hasil = mysqli_query($connection, $query);
            while ($row=mysqli_fetch_array($hasil)AND $no<11){
                echo '<tr>
                <td>'.$no.'</td>
                <td>'.$row['nama'].'</td>
                <td>'.$row['skor'].'</td>
                </tr>';
                $no++;
            }
            ?>
    </table>
</body>
</html>