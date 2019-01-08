<?php
 $host = "localhost";
 $username = "root";
 $password = "";
 $database = "profile";

 $koneksi = new mysqli($host,$username,$password,$database);

 if($koneksi->connect_error){   
     die("Fail to Connect");
 }


 ?>