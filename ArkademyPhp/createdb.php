<?php


include "koneksi.php";

$qw = "CREATE DATABASE profile";
if($koneksi->query($qw) === true ){
    echo "create success";
}