<?php
$host='localhost';
$user='root';
$pass='';
$dbname="college";
$conn=mysqli_connect($host,$user,$pass);
if(!$conn)
{
 echo "could not connect";
}
echo "Connected Successfully";
$sql='Create DataBase college';
if(mysqli_query($conn,$sql))
{
 echo "DataBase college created successfully :) :) :)";
}
else
{
 echo "Sorry DataBase college creation failed :( :( :( ".mysqli_error($conn);
}
mysqli_close($conn);
?> 