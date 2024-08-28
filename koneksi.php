<?php

$host = "localhost";
$user = "root";
$pass = "";
$database = "laundry";
$conn = mysqli_connect($host,$user,$pass,$database);

if(!conn){
    echo "<script>
        alert('koneksi error');
    </script>";
}else{
//echo oke berhasil;
}