<?php
$pro_title = $_POST['pro_title'];
$pro_description = $_POST['pro_description'];
$pro_skill = $_POST['pro_skill'];
$pro_time = $_POST['pro_time'];
$username = $_SESSION['username`']
if (!empty($pro_time) || !empty($pro_skill) || !empty($pro_title) || !empty($pro_description))
{
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "freelancer";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    }
    else {

     $sql = "INSERT Into project (pid, pro_title, pro_description, pro_skill, pro_time) values(12345,'$pro_title',' $pro_description', $pro_skill, $pro_time)";
     //Prepare statement
     if($conn->query($sql)=== TRUE)
     {
     	echo "new record created";
     }
     	else
     	{
     		echo  "error" . $sql. "<br>". $conn->error;
     	}
     	$conn->close();
    }
    $sql2 ="SELECT pid from project where pro_description=$pro_description"
    $sql3 = "INSERT INTO user (myproject_pid) values ($sql2) where username=$username"
}
else {
 echo "All field are required";
 die();
}
?>
