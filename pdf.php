<?php


require_once('fpdf/fpdf.php');

$host = 'localhost';

$user = 'root';

$pass = '';

$dbname = 'college';


$conn = mysqli_connect($host, $user, $pass, $dbname);


if (!$conn) 
{
  
 die("Could not connect: " . mysqli_error());



}
$pin = $_POST['pin'];


$sql = "SELECT * FROM students1 WHERE pin = '$pin'";


$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) 
{
  
$row = mysqli_fetch_assoc($result);

  
$pdf = new FPDF();
  $pdf->AddPage();

  
$pdf->SetFont('Arial', 'B', 16);
  
$pdf->Cell(0, 10, 'Student Details', 0, 1);
  
$pdf->Ln();

  $pdf->SetFont('Arial', '', 12);
$pdf->Cell(50, 10, 'Pin:', 0, 0);
  
$pdf->Cell(0, 10, $row['pin'], 0, 1);
  
$pdf->Cell(50, 10, 'Name:', 0, 0);
  
$pdf->Cell(0, 10, $row['name'], 0, 1);

  
$pdf->Cell(50, 10, 'DOB:', 0, 0);
  
$pdf->Cell(0, 10,$row['dob'], 0, 1);


$pdf->Cell(50, 10, 'Branch:', 0, 0);
  
$pdf->Cell(0, 10,$row['branch'], 0, 1);
$pdf->Cell(50, 10, 'Phone Number:', 0, 0);
  
$pdf->Cell(0, 10,$row['phone_number'], 0, 1);
$pdf->Cell(50, 10, 'Email:', 0, 0);
  
$pdf->Cell(0, 10,$row['gmail'], 0, 1);
$pdf->Cell(50, 10, "Father Name:", 0, 0);
  

$pdf->Cell(0, 10,$row['father_name'], 0, 1);

$pdf->Cell(50, 10, "Mother Name:", 0, 0);
  

$pdf->Cell(0, 10,$row['mother_name'], 0, 1);
$pdf->Cell(50, 10, 'Address:', 0, 0);
  
$pdf->Cell(0, 10,$row['address'], 0, 1);
$pdf->Cell(50, 10, 'SSC Marks:', 0, 0);
  
$pdf->Cell(0, 10,$row['ssc_marks'], 0, 1);
$pdf->Cell(50, 10, 'First Year Marks:', 0, 0);
  
$pdf->Cell(0, 10,$row['first_year_marks'], 0, 1);
$pdf->Cell(50, 10, 'Second Year Marks:', 0, 0);
  
$pdf->Cell(0, 10,$row['second_year_marks'], 0, 1);
$pdf->Cell(50, 10, 'Percentage:', 0, 0);
  
$pdf->Cell(0, 10,$row['percentage'], 0, 1);
$pdf->Cell(50, 10, 'Attendance:', 0, 0);
  
$pdf->Cell(0, 10,$row['attendance'], 0, 1);
$pdf->Cell(50, 10, 'City:', 0, 0);
  
$pdf->Cell(0, 10,$row['city'], 0, 1);
$pdf->Cell(50, 10, 'Gender:', 0, 0);
  
$pdf->Cell(0, 10,$row['gender'], 0, 1);
$pdf->Cell(50, 10, 'Caste:', 0, 0);
  
$pdf->Cell(0, 10,$row['caste'], 0, 1);
$pdf->Cell(50, 10, 'Parents Contact Number:', 0, 0);
  
$pdf->Cell(0, 10,$row['parents_contact_number'], 0, 1);
$filename=$pin.'.pdf'; 
$pdf->Output('I',$filename);


}


mysqli_close($conn);

?>
