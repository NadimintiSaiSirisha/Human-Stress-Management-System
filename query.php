<?php

$name=$_POST["name"];
$email=$_POST["email"];
$message=$_POST["message"];


$servername="localhost";
$username="root";
$password="";
$dbname="wtproject";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn->connect_error)
	{
		echo 'conn';
		die("connection failed : " . $conn->connect_error);
	}
	
				$q="INSERT INTO `message`(`name`,`email`,`message`) VALUES ('".$name."','".$email."','".$message."')";
				if(mysqli_query($conn,$q))
				{
					echo"We have registered your query successfully";
				}

$conn->close();
?>