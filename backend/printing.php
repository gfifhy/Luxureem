<?php

require '../fpdf/fpdf.php';
include '../admin/webcontent.php';

$connection = new mysqli('localhost', 'root', '', 'luxureemdb');
if ($connection->connect_error) {
    echo "Connection error: " . $connection->connect_error;
}
// SQL query to select data
$sql = "SELECT * FROM patients"; 
$result = $connection->query($sql);

$pdf = new FPDF('P', 'mm', "A4");

$pdf->AddPage();

// Add logo and webname as headers
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(20, 10, $pdf->Image('../frontend/img/' . $_SESSION['weblogo'], 5, 5, 30), 0, 0);
$pdf->Cell(0, 20, $_SESSION['webname'], 0, 1);

$pdf->SetFont('Arial', 'B', 20);
$pdf->Cell(70, 7, '', 0, 0);
$pdf->Cell(0, 20, 'Sales Report', 0, 1);

// Line Divider
$pdf->SetDrawColor(180, 180, 180);
$pdf->SetLineWidth(1);
$pdf->Line(10, 55, 200, 55);

$pdf->Cell(70, 7, '', 0, 1);
$pdf->Cell(70, 7, '', 0, 1);

// Table header
$pdf->SetFont('Arial', 'B', 12);
$pdf->SetFillColor(220, 220, 220);
$pdf->Cell(47.2, 10, 'Service Name', 1, 0, 'C', true);
$pdf->Cell(47.2, 10, 'Price', 1, 0, 'C', true);
$pdf->Cell(47.2, 10, 'Sales', 1, 0, 'C', true);
$pdf->Cell(47.2, 10, 'Total', 1, 1, 'C', true);

$sql = "SELECT * FROM barbie";
$result = $connection->query($sql);
// Print sales data
$pdf->SetFont('Arial', '', 12);
$totaltotal = 0; // added to avoid the warning
while ($row = $result->fetch_assoc()) {
    $totalperitem = $row["barbieprice"] * $row["sales"];
    $totaltotal += $totalperitem;
    $pdf->Cell(47.2, 10, $row["barbiename"], 1, 0, 'C');
    $pdf->Cell(47.2, 10, $row["barbieprice"], 1, 0, 'C');
    $pdf->Cell(47.2, 10, $row["sales"], 1, 0, 'C');
    $pdf->Cell(47.2, 10, '$' . $totalperitem, 1, 1, 'C');
}

// Output the PDF file
$pdf->Output();

?>