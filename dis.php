<?php

$host = 'localhost';

$user = 'root';

$pass = '';

$dbname = 'college';

$conn = mysqli_connect($host, $user, $pass, $dbname);

if (!$conn) 
{
    
die("Could not connect: " . mysqli_error());

}

if (isset($_POST['search_student'])) 
{
    
$pin = $_POST['search_pin'];
    
$sql = "SELECT * FROM students1 WHERE pin = '$pin'";
    
$result = mysqli_query($conn, $sql);
    
if (mysqli_num_rows($result) > 0) 
{
        
echo "<h1 align='center'>STUDENT DETAILS<h2>";
echo "<table  cellspacing='15' style='border: 1px solid black; margin: 0 auto;  '>";
        
while ($row = mysqli_fetch_assoc($result)) 
{
         
echo "<tr><td>Pin:</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp" .$row['pin'] . "</td></tr>";
    
echo "<tr><td>Name:</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp" . $row['name'] . "</td></tr>";
            
echo "<tr><td>DOB:</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp" . $row['dob'] . "</td></tr>";
            
echo "<tr><td>Branch:</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp" . $row['branch'] . "</td></tr>";
            
echo "<tr><td>Year:</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp" . $row['year'] . "</td></tr>";
            
echo "<tr><td>Phone Number:</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp" . $row['phone_number'] . "</td></tr>";
            
echo "<tr><td>Email:</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp" . $row['gmail'] . "</td></tr>";

echo "<tr><td>Father's Name:</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp" . $row['father_name'] . "</td></tr>";

echo "<tr><td>Mother's Name:</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp" . $row['mother_name'] . "</td></tr>";
echo "<tr><td>Address:</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp" . $row['address'] . "</td></tr>";
echo "<tr><td>SSC Marks:</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp" . $row['ssc_marks'] . "</td></tr>";
echo "<tr><td>First Year Marks:</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp" . $row['first_year_marks'] . "</td></tr>";
echo "<tr><td>Second Year Marks:</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp" . $row['second_year_marks'] . "</td></tr>";
echo "<tr><td>Percentage:</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp" . $row['percentage'] . "</td></tr>";
echo "<tr><td>Attendance:</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp" . $row['attendance'] . "</td></tr>";
echo "<tr><td>City:</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp" . $row['city'] . "</td></tr>";
echo "<tr><td>Gender:</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp" . $row['gender'] . "</td></tr>";
echo "<tr><td>Caste:</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp" . $row['caste'] . "</td></tr>";
echo "<tr><td>Parent's Contact Number:</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp" . $row['parents_contact_number'] . "</td></tr>";

echo '<form method="post" action="pdf.php">';
    
echo '<tr><td align="center" colspan="2"><input type="hidden" name="pin" value="' . $row['pin'] . '">';
    
echo '<button type="submit" name="download_pdf">Download PDF</button>';
    
echo '</form>';    
}
  
} 
else 
{
    
echo "No student found with that PIN number.";
  
}
}


mysqli_close($conn);


?>

