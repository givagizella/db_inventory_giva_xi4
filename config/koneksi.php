<?php 

$conn = mysqli_connect('localhost','root','','db_inventory_giva_xi4');

if(!$conn){
    die("Koneksi Gagal". mysqli_connect_error());
}