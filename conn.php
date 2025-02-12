<?php
$host='localhost';
$user='root';
$pass='';
$conn=mysqli_connect($host,$user,$pass);
if(!$conn)
{
 echo "could not connect";
}
echo "Connected Successfully";
mysqli_close($conn);
?> 


