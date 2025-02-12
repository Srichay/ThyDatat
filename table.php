<?php
$host='localhost';

$user='root';

$pass='';

$dbname="college";

$conn=mysqli_connect($host,$user,$pass,$dbname);


// Check connection

if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());

}


// Create table

$sql = "CREATE TABLE students1 (
    pin VARCHAR(30),
    
name VARCHAR(30),
    
dob DATE,
    
branch VARCHAR(30),
    
year INT(4),
    
phone_number VARCHAR(30),
    
gmail VARCHAR(50),
    
father_name VARCHAR(30),
    
mother_name VARCHAR(30),
    
address VARCHAR(100),
    
ssc_marks INT(3),
    
first_year_marks INT(3),
   
 second_year_marks INT(3),
    
percentage FLOAT(5),
   
 attendance FLOAT(5),
    
city VARCHAR(30),
   
 gender VARCHAR(10),
    
caste VARCHAR(30),
    
parents_contact_number VARCHAR(30)
)";


if (mysqli_query($conn, $sql)) 
{
   
 echo "Table created successfully";

}
 else
 {
   
 echo "Error creating table: " . mysqli_error($conn);

}

mysqli_close($conn)
?>;