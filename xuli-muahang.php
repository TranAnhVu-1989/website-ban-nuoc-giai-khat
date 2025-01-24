<?php
include("connect.php");
ob_start();
if(isset($_POST['muahang']))
{
	$mysqli = new mysqli("localhost","root","","bannuocgk");

	if ($mysqli -> connect_errno) {
	  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
		exit();
	}
	$sql="insert into loainuocgk values('{$_POST['loainuocuong']}', '{$_POST['tennuocuong']}', '{$_POST['giaban']}', '{$_POST['soluong']}')";
	$result = $mysqli -> query($sql);
	header("location:giohang.php");
}
if(isset($_POST['xoa']))
{
	$mysqli = new mysqli("localhost","root","","bannuocgk");

	if ($mysqli -> connect_errno) {
	  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
		exit();
	}
	$sql="delete from loainuocgk";
	$result = $mysqli -> query($sql);
	header("location:giohang.php");
}
?>
