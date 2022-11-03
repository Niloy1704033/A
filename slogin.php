<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    //echo "Error";
}

$username=mysqli_real_escape_string($conn,trim($_POST['username']));
$password=mysqli_real_escape_string($conn,trim(sha1($_POST['pass'])));
//$username=$_POST['username'];
//$password=$_POST['pass'];
$query="SELECT fname,sid FROM user WHERE fname='$username' AND password='$password'";
//$expense=$_POST['e'];
$data=mysqli_query($conn,$query);
//echo mysqli_num_rows($data);
if(mysqli_num_rows($data)==1)
{
  echo <<<HTML
  



HTML;
}

$conn->close();
?>
