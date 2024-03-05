<?php
include 'konfig/koneksi.php';

if (isset($_GET['id'])){
    $id= $_GET['id'];
    $hapus = mysqli_query($kon,"DELETE FROM user WHERE id = $id");
    header("location: tabel.php");
} else {
    echo "data tidak ada";
}

?>