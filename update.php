<?php
$host='localhost';
$user='root';
$pass='';
$dbname="college";
$conn=mysqli_connect($host,$user,$pass,$dbname);
if(!$conn)
{
 echo "could not connect";
}
echo "Connected Successfully <br/>";
$sql='update students1 set name="varma" where pin=03';
$result=mysqli_query($conn,$sql);
if($result)
{
 echo "Updated successfully :) :) :)";
}
else
{
 echo "Updation failed :( :( :( ".mysqli_error($conn);
}
mysqli_close($conn);
?> 
