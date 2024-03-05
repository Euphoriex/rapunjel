<?php 
include 'konfig/koneksi.php';
$id = $_POST['id'];
$nama = $_POST['full_name'];
$email = $_POST['email'];
$usernm = $_POST['username'];
$pw = $_POST['pw'];

$update = mysqli_query($kon, "UPDATE user SET full_name = '$nama', email = '$email', username = '$usernm', pw = '$pw' WHERE id = '$id'");

if ($update){
    header("location: tabel.php");
} else {
    echo("data gagal disimpan");
}

?>