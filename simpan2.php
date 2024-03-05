<?php
include 'konfig/koneksi.php';
$id = $_POST['id'];
$nama = $_POST['full_name'];
$email = $_POST['email'];
$usernm = $_POST['username'];
$pw = $_POST['pw'];

$simpan = mysqli_query($kon,"INSERT INTO user VALUES(NULL,'$nama','$email','$usernm','$pw')");

if($simpan){ 
    header('location: tabel.php');
    echo "<script>alert('Register Succesed!')</script>";
} else {
    echo "<script>alert('Register Failed!')</script>";}
?>