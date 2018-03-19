
<?php
session_start();
$name=$_SESSION["username"];
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


$q="UPDATE `user` SET `expert_id`=3 WHERE `firstname`='".$name."'";
if(mysqli_query($conn,$q))
{
header("location:expert3.html");
}
else{
echo "Error" ;
}

$conn->close();

?>