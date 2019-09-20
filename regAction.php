<?php
	
	//sever connection
	$connect=mysql_connect("localhost","root","");//server name, username, password
	
	$nam=$_POST['name'];
	$username=$_POST['uname'];
	$mail=$_POST['mail'];
	$pass=$_POST['pass'];
	$rol=$_POST['roll'];
	
	
	//database selection
	mysql_select_db("csebu",$connect);
	
	$query="INSERT INTO student(name,username, email, password, roll) 
	VALUES('$nam','$username','$mail','$pass','$rol')";
	
	$result=mysql_query($query,$connect);
	
	if($result)
	{
		echo "Inserted successfully";
		//header("location:studentList.php");
	}
	else
	{
		die("Could not insert".mysql_error());
	}
	
	
	mysql_close($connect);
?>
