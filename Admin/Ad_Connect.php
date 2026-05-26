<?php
    $host="localhost";
    $user="root";
    $password="";
    $dbname="project";

    $con=mysqli_connect($host,$user,$password,$dbname) or die (" ไม่สามารถเชื่อมต่อ database ได้ ");
    $con->query("SET NAMES UTF8");
?>