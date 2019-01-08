<?php

include("koneksi.php");

$sql = "CREATE TABLE user(
    id int primary key,
    nama varchar(50),
    role varchar(50),
    availability varchar(50),
    age varchar(50),
    location varchar(50),
    years_experience varchar(50),
    email varchar(50)
)";

if($koneksi->query($sql) == true){
    echo "berhasil";
}
?>