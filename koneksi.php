<?php
$hostname="localhost";
$username="root";
$password="";
$database="movieku";
$koneksi=new mysqli($hostname, $username, $password, $database);

if($koneksi->connect_error){
    die("".$koneksi->connect_error);
}
?>