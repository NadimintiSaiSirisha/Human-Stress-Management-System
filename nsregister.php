<?php 
$fnaam=$_REQUEST["fname"];
$lnaam=$_REQUEST["lname"];
$dob=$_REQUEST["dob"];
$phone=$_REQUEST["phn"];
$address=$_REQUEST["address"];
$mailid=$_REQUEST["email"];
$paswd=$_REQUEST["password"];


$cpassword=$_REQUEST["cpassword"];

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
	
if($paswd==$cpassword)
	{
		
		
		$username = "SELECT `firstname` FROM `user` WHERE firstname='".$fnaam."'";
		
		$result=mysqli_query($conn,$username);
		
		if ($result->num_rows == 0) 
			{
				$passwordmd5 = md5($paswd);
				$q="INSERT INTO `user`(`firstname`,`lastname`,`dob`,`phnno`,`address`,`email`,`pwd`) VALUES ('".$fnaam."','".$lnaam."','".$dob."','".$phone."','".$address."','".$mailid."','".$passwordmd5."')";
				if(mysqli_query($conn,$q))
				{
					header("location:login.html");
				}

			}	
		else 
			{
				header("location:uniqueusername.html");
			}
	}
else 
	{
		header("location:nomatch.html");
	}
$conn->close();
?>