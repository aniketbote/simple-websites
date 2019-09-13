<?php
    $x = $_SESSION['username'];
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "freelancer";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    }
    else
    {
     $sql = "SELECT uid, username, name, email, dob, ml, ip, wd, ad, te, se, bc FROM user WHERE username = '$x' ";
     $result = $conn->query($sql);

     while($row = $result->fetch_assoc())
     {
       echo $row["uid"];
       echo $row["username"];
       echo $row["name"];
       echo $row["email"];
       echo $row["dob"];
       echo $row["ml"];
       echo $row["ip"];
       echo $row["wd"];
       echo $row["ad"];
       echo $row["te"];
       echo $row["se"];
       echo $row["bc"];

      }
     //Prepare statement

     	$conn->close();
    }


?>
