<?php
require('../fpdf/fpdf.php');

session_start();

$Email = $_SESSION['Email'];
$FirstName = $_SESSION['FirstName'];
$LastName = $_SESSION['LastName'];
$BirthDate = $_SESSION['BirthDate'];
$Country = $_SESSION['Country'];
$Passport = $_SESSION['Passport'];
$Gender = $_SESSION['Gender'];
$StartDate = $_SESSION['StartDate'];
$EndDate = $_SESSION['EndDate'];
$Area = $_SESSION['Area'];
$CarModel = $_SESSION['CarModel'];
$NumberPlate = $_SESSION['NumberPlate'];

// creating PDF file

class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    $this->Image('../../../../images/logo5.png',10,6,30);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Move to the right
    $this->Cell(60);
    // Title
    $this->Cell(77,13,'Car insurance',1,0,'C');
    // Line break
    $this->Ln(20);
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);

$pdf->Cell(0,10,'',0,1);
$pdf->Cell(0,10,'',0,1);

$pdf->Cell(0,10,'Full name: '.$FirstName . ' ' . $LastName,0,1);
$pdf->Cell(0,10,'Birth date: ' . $BirthDate,0,1);
$pdf->Cell(0,10,'Citizenship: ' . $Country,0,1);
$pdf->Cell(0,10,'Passport number: ' . $Passport,0,1);
$pdf->Cell(0,10,'Period of validity: ' . $StartDate ." --- " .$EndDate,0,1);
$pdf->Cell(0,10,'Region of validity: ' . $Area,0,1);
$pdf->Cell(0,10,'Car model: ' . $CarModel,0,1);
$pdf->Cell(0,10,'Number plate: ' . $NumberPlate,0,1);

$pdf->Cell(0,10,'',0,1);

$pdf->Cell(0,10,'   Estate, Travel, Health, Life, Car, Gadget  Insurance products information document GlobalCare Insurance Tallinn,',0,1);
$pdf->Cell(0,10,'Estonia, 11316 The information document provides a general overview of following insurances. This does not reflect',0,1);
$pdf->Cell(0,10,'terms and conditions of the insurance contract arising from your insurance interest and demands. The terms and',0,1);
$pdf->Cell(0,10,'conditions of the contract are included in other documents, such as the offer, the terms and conditions of insurance,',0,1);
$pdf->Cell(0,10,'and the policy.',0,1);
$pdf->Cell(0,10,'',0,1);
$pdf->Cell(0,10,'   The objective of these insurances  is to offer insurance cover for a structure and/or domestic property against',0,1);
$pdf->Cell(0,10,'damage caused by fire, failure of piping, storm, flood, burglary and vandalism, accident and etc.',0,1);
$pdf->Cell(0,10,'The cover shall begin after conclusion of the insurance contract, on the date specified on the policy. ',0,1);
$pdf->Cell(0,10,'The procedure and terms for advance notice of an insurance contract are provided in the terms of insurance.',0,1);
$pdf->Cell(0,10,'',0,1);
$pdf->Cell(0,10,'The client may notify GLOBALCARE of their wish to terminate the contract at offices of GLOBALCARE.',0,1);
$pdf->Cell(0,10,'                            '.'                    '.'              Number of Policy: 4275323993                                 ',0,1);
$pdf->Output();
?>
