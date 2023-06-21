<?php
$conn = mysqli_connect("localhost","root","","ras_coffee");

if(isset($_POST['submit'])){
    $meja = $_POST['meja'];
    $nama = $_POST['nama'];
    $jenis = $_POST['jenis_menu'];
    $jumlah = $_POST['jumlah'];
}

$conn = mysqli_query($conn, "INSERT INTO pesanan(Meja,Nama,Jenis_Menu,Jumlah)VALUES('$meja','$nama','$jenis','$jumlah') ");


?>

<a href="pesanan.php">Lihat pesanan</a>