<?php
$server = "localhost";
$username = "root";
$password = "";

$con=mysqli_connect($server , $username , $password);

if(!$con){
   die("connection to the database failed due to ".mysqli_connect_error());
}

$id=$_POST['id'];
$username=$_POST['username'];
$auth_key=$_POST['auth_key'];
$password_hash=$_POST['password_hash'];
$password_reset_token=$_POST['password_reset_token'];
$email=$_POST['email'];
$created_at=$_POST['created_at'];
$updated_at=$_POST['updated_at'];
$role=$_POST['role'];

$sql2="INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `pass_reset_token`, `email`, `created_at`, `updated_at`, 
`role`) VALUES ('$id', '$username', '$auth_key', '$password_hash','$password_reset_token', '$email', current_timestamp(), 
current_timestamp(), '$role');";
?>