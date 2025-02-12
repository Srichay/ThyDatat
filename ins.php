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


$pin = $_POST['pin'];

$name = $_POST['name'];

$dob = $_POST['dob'];

$branch = $_POST['branch'];

$year = $_POST['year'];

$phone_number = $_POST['phone_number'];

$gmail = $_POST['gmail'];

$father_name = $_POST['father_name'];

$mother_name = $_POST['mother_name'];

$address = $_POST['address'];

$ssc_marks = $_POST['ssc_marks'];

$first_year_marks = $_POST['first_year_marks'];

$second_year_marks = $_POST['second_year_marks'];

$percentage = $_POST['percentage'];
$attendance = $_POST['attendance'];

$city = $_POST['city'];
$gender = $_POST['gender'];
$caste = $_POST['caste'];

$parents_contact_number = $_POST['parents_contact_number'];



$sql = "INSERT INTO students1 (pin, name, dob, branch, year, phone_number, gmail, father_name, mother_name, address, ssc_marks, first_year_marks, second_year_marks, percentage, attendance, city, gender, caste, parents_contact_number) 
VALUES (
'$pin',
'$name',
'$dob',
'$branch',
'$year',
'$phone_number',
'$gmail',
'$father_name',
'$mother_name',
'$address',
'$ssc_marks',
'$first_year_marks',
'$second_year_marks',
'$percentage',
'$attendance',
'$city',
'$gender',
'$caste',
'$parents_contact_number'
)";


$result=mysqli_query($conn,$sql);


if($result) 
{
  
echo "Insertion of values successfully :) :) :)";

} 
else 
{
  echo "Values not inserted :( :( :( ".mysqli_error($conn);

}


mysqli_close($conn);


?>