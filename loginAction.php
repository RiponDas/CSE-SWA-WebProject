<?php
	
	//sever connection
	$connect=mysql_connect("localhost","root","");//server name, username, password
	
	$uname=$_POST['username'];
	$pass=$_POST['password'];
	
	//database selection
	mysql_select_db("csebu",$connect);
	
	$query="SELECT * FROM student WHERE username='$uname' AND password='$pass'";
	$result=mysql_query($query,$connect);
	
	$count=mysql_num_rows($result);
	
	if($count==1)
	{
		//echo "Successfully loged in";
		header("location:home.php");
	}
	else
	{
		die("Wrong username or password".mysql_error());
	}
	
	
	mysql_close($connect);
?>
