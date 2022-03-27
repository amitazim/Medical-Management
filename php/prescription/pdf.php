<?php
if (!empty($_POST['submit'])) {
    $doctor = $_POST['doctor'];
    $serial = $_POST['serial'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $date = $_POST['date'];
    $des = $_POST['des'];

    require("fpdf/fpdf.php");

    $pdf = new FPDF();
    $pdf->AddPage();

    $pdf->SetFont("Arial", "b", 20);
    $pdf->Cell(0, 15, "Prescription", 0, 1, 'C');


    $pdf->SetFont("Arial", "b", 12);

    $pdf->Cell(45, 10, "Name", 1, 0, 'C');
    $pdf->Cell(45, 10, "Age", 1, 0, 'C');
    $pdf->Cell(45, 10, "Date", 1, 0, 'C');
    $pdf->Cell(45, 10, "ID", 1, 1, 'C');

    $pdf->Cell(45, 10, $name, 1, 0, 'C');
    $pdf->SetFont("Arial", "", 12);


    $pdf->Cell(45, 10, $age, 1, 0, 'C');
    $pdf->Cell(45, 10, $date, 1, 0, 'C');
    $pdf->Cell(45, 10, $serial, 1, 1, 'C');

    $pdf->SetFont("Arial", "b", 12);

    $pdf->Cell(45, 20, $doctor, 0, 1);



    $pdf->Cell(0, 20, "Description:", 0, 1);
    $pdf->SetFont("Arial", "", 12);

    $pdf->Cell(0, 20, $des, 0, 1);

    $file = $name . ' ' . $date . '.pdf';

    // $file = time().'.pdf';

    $pdf->output($file, 'D');
}
