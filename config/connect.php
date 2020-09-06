<?php
  $connect=new mysqli("localhost", "root", "", "advertise", "3306");
  if ($connect->errno){
    die("Couldn't connect to the database!");
  }
  $connect->set_charset("utf8");
?>
