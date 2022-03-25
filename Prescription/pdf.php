<?php
if(!empty($_POST['submit']))
{
    $serial = $_POST['serial'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $date = $_POST['date'];
    $des = $_POST['des'];

    require("fpdf/fpdf.php");

    $pdf = new FPDF();
    $pdf -> AddPage();

    $pdf -> SetFont("Arial","",12);
    $pdf -> Cell(0,10,"Prescription", 1, 1,'C');

    $pdf -> Cell(20,10,"Serial", 1, 0);
    $pdf -> Cell(45,10,"Name", 1, 0);
    $pdf -> Cell(45,10,"Age", 1, 0);
    $pdf -> Cell(0,10,"Date", 1, 1);


    $pdf -> Cell(20,10,$serial, 1, 0);
    $pdf -> Cell(45,10,$name, 1, 0);
    $pdf -> Cell(45,10,$age, 1, 0);
    $pdf -> Cell(0,10,$date, 1, 1);
    $pdf -> Cell(0,20,"Description:", 0, 1);
    $pdf -> Cell(0,20,$des, 0, 1);


    $file = time().'.pdf';

    $pdf -> output($file,'D');
}
?>