<?php

//konek ke my sql


//get value dari form login 
$username =$_POST['username'];
$password =$_POST['password'];

$_SESSION['username'] = $username;

if ($_SESSION['username'] == "raflyrenaldy"){
	session_start();
	$_SESSION['username'] = 'Rafly Renaldy';
    $_SESSION['role'] = '3';
    header('location:../index.php?page=admin/home');
}else if($_SESSION['username'] == "bagusaditya"){
	session_start();
	$_SESSION['username'] = 'Bagus Aditya';
     $_SESSION['role'] = '2';
      header('location:../index.php?page=gudang/home');
}else if($_SESSION['username'] == "sendyhendriawan"){
	session_start();
	$_SESSION['username'] = 'Sendy Hendriawan';
     $_SESSION['role'] = '1';
      header('location:../index.php?page=kasir/home');
}else if($_SESSION['username'] == "fadliyfirdaus"){
	session_start();
	$_SESSION['username'] = 'Fadliy Firdaus';
     $_SESSION['role'] = '1';
      header('location:../index.php?page=kasir/home');
}

?>