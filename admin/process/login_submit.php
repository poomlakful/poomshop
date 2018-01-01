<?php
session_start();
if(isset($_POST['username']) && isset($_POST['password'])) {
	//session_register("username",$_POST['username']);
	$_SESSION['username'] = $_POST['username'];
	echo"<script>window.location='../index.php';</script>";
} else {
	echo"<script>alert('ยังไม่กรอกชื่อผู้ใช้หรือรหัสผ่าน');history.back();</script>";
}