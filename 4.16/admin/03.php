<?php
	header("content-type:text/html;charset=utf-8");
	$link=mysqli_connect("192.168.43.229","user","root");
	mysqli_set_charset($link,"utf8");
	mysqli_select_db($link,"d4");
	$s=$_GET['eid'];
	$query="delete from t1 where id='$s'";
	mysqli_query($link,$query);
	$qu="select * from t1";
	$queryobj=mysqli_query($link,$qu);
	print_r(json_encode(mysqli_fetch_all($queryobj)));
	mysqli_close($link);
?>