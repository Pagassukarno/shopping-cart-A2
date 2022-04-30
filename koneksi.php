<?php

$conn = mysqli_connect('localhost', 'root', '','shopping-cart');

if (!$conn){
    die ("Koneksi Gagal." . mysqli_connect_error());
}
?>