<?php
     $server = "localhost";
     $username = "root";
     $password = "";

     $con=mysqli_connect($server , $username , $password);

     if(!$con){
        die("connection to the database failed due to ".mysqli_connect_error());
    }

    $h_id=$_POST['h_id'];
    $h_name=$_POST['h_name'];
    $h_addr=$_POST['h_addr'];
    $h_phone=$_POST['h_phone'];
    $h_email=$_POST['h_email'];

    $sql3="INSERT INTO `hospital` (`h_id`, `h_name`, `h_addr`, `h_phone`, `h_email`) VALUES ('$h_id', '$h_name', '$h_addr',
     '$h_phone', '$h_email');";

?>