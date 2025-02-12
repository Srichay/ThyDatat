<?php

$host = 'localhost';

$user = 'root';

$pass = '';

$dbname = "college";

$conn = mysqli_connect($host, $user, $pass, $dbname);

if (!$conn) 
{
    
echo "could not connect";

}


if (isset($_POST['pin'])) 
{
    
$pin = $_POST['pin'];
    
$sql = "DELETE FROM students1 WHERE pin='$pin'";
    
$result = mysqli_query($conn, $sql);
    
if ($result) 
{
        
 echo "Record with PIN number $pin has been deleted.";
    
} 
else 
{
        
echo "Error deleting record: " . mysqli_error($conn);
    
}

}


mysqli_close($conn);
?>