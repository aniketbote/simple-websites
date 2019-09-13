<?php
$conn=new mysqli("localhost","root","","aniket");
$sql="SELECT name,email,pwd FROM test1";
$res=$conn->query($sql);
while($row=$res->fetch_assoc())
{
  echo $row["name"];
  echo nl2br("\n");
  echo $row["email"];
  echo $row["pwd"];
}
$conn->close();
 ?>
