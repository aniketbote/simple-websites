<?php
$username = $_POST['username'];
$password = md5($_POST['password']);
$name = $_POST['name'];
$email = $_POST['email'];
$dob = $_POST['dob'];
$class= $_POST['class'];
$roll_no= $_POST['roll_no'];
//$assigned = $_POST['assigned'];
$ml = $_POST['ml'];
$ip = $_POST['ip'];
$wd = $_POST['wd'];
$ad = $_POST['ad'];
$te = $_POST['te'];
$se = $_POST['se'];
$bc = $_POST['bc'];


    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "freelancer";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error())
    {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    }
    else
    {
     $sql = "INSERT Into user (username, password, name, email, dob, ml, ip, wd, ad, te, se, bc) values('$username','$password','$name','$email','$dob','$class',$roll_no,$ml,$ip,$wd,$ad,$te,$se,$bc )";
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


?>
