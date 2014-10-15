<html>
<head>

<title> Kiểm tra tài khoản</title>
<link rel="stylesheet" style="css/text" href="style.css"/>
<div id="ground1">
<img style=" height: 130px; width: 110px;margin-top: 10px;margin-left: 50;" src="2.jpg">
<div id="text1" >Demo Website Giảng Dạy <br> Và Download Tài Liệu Cho Sinh Viên</div>
</div>
<div class="ground2">
	<ul style="margin-top: 0px;">
	<li><a href="trangchu.html" >Trang Chủ </a></li> 
	<li><a href="gioithieu.html" >Giới Thiệu</a></li>							
	<li><a href="tailieu.html" >Tài Liệu Cho Học Sinh</a> </li>
	</div>
</head>
</html>

<?php
$db= mysqli_connect("localhost","root","") or die("Khong the ket noi voi database");
	mysql_select_db("dangki",$db) or die("Khong the chon database");

$username="";
$pass="";
	if ($_post['username']==NULL){
		echo"Vui lòng nhập tên đăng nhập";
		die();}
	else $username=$_post['username'];
	if ($_post['pass']==NULL){
		echo"Vui lòng nhập Password";
		die();}
		else $username=$_post['pass'];
	if($_post['username']=="asd" && $_post['pass']="1234")
		echo"đăng nhập thành công";

?>