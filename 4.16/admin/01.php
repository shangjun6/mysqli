<?php
	header("content-type:text/html;charset=utf-8");
	$link=mysqli_connect("192.168.43.229","user","root");
	mysqli_set_charset($link,"utf8");
	mysqli_select_db($link,"d4");
	$id=$_GET['id'];
	$name=$_GET['uname'];
	$pas=$_GET['upas'];
	$query="insert into t1(id,uname,upas) values('$id','$name','$pas')";
	$queryobj=mysqli_query($link,$query);
	mysqli_close($link);
?>