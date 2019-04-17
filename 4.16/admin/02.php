<?php
	header("content-type:text/html;charset=utf-8");
	//连接数据库
	$link=mysqli_connect("192.168.43.229","user","root");
	mysqli_set_charset($link,"utf8");
//	进入数据库
	mysqli_select_db($link,"d4");
	$query="select * from t1 order by id asc";
	$queryobj=mysqli_query($link,$query);
	print_r(json_encode(mysqli_fetch_all($queryobj)));
//	关闭数据库
	mysqli_close($link);
?>