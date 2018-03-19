<?php
session_start();
$servername = "localhost";
$naam=$_REQUEST["u"];
$pasword=md5($_REQUEST["p"]);
$dbname = "wtproject";
$username="root";
$password="";
$_SESSION["username"]=$naam;
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT `firstname`, `pwd` FROM `user` WHERE firstname='".$naam."' && pwd='".$pasword."'";
$result=mysqli_query($conn,$sql);

if ($result->num_rows > 0) {

header("location:loginpage.php");


    }
   
else {
header("location:errorlogin.html"); 
}
$conn->close();
?>