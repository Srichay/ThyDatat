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
$sql='delete from students1 where pin=02';
$result=mysqli_query($conn,$sql);
if($result)
{
 echo "Deleted successfully :) :) :)";
}
else
{
 echo "not deleted :( :( :( ".mysqli_error($conn);
}
mysqli_close($conn);
?> 
