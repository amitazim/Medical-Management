<?php
session_start(); 
include "db_conn.php";


if (isset($_POST['D_ID']) && isset($_POST['P_Name']) && isset($_POST['Gender']) && isset($_POST['Age']) && isset($_POST['P_Type']) && isset($_POST['A_Date'])) {

 
    $D_ID = $_POST['D_ID'];
    $P_Name = $_POST['P_Name'];
    $Gender = $_POST['Gender'];
    $Age = $_POST['Age'];
    $P_Type = $_POST['P_Type'];
    $A_Date = $_POST['A_Date'];


   $sql = "insert into patient(D_ID,P_Name,Gender,Age,P_Type,A_Date) values('$D_ID','$P_Name','$Gender','$Age','$P_Type','$A_Date')";
   if(mysqli_query($conn,$sql)){
       echo 'Registration successfully...';
   }else{
    echo 'Error';
   }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ju Medical Center</title>
    <link rel="shortcut icon" href="https://juniv.edu/images/favicon.ico">
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/book.css">

</head>

<body>

    <!-- header section starts  -->

    <header class="header">
        <img src="/image/logo_med.png" alt style="height: 75px; width: 90px;">
        <a href="" class="logo">Medical Center</a>


        <nav class="navbar">
            <a href="/index.html">home</a>
            <a href="/html/services.html">services</a>

            <a href="/html/notice.html">Notice</a>
            <a href="/html/doctors.php">Doctor</a>

            <a href="http://localhost:3000/chat/index.php">Chat</a>
            <a href="/html/doctors.php">Appointment</a>
            <a href="http://localhost:3000/php/index.php">login</a>
            <a href="http://localhost:3000/php/signup.php">signup</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>

    </header>

    <!-- header section ends -->


<div style="margin-left: 40%; margin-top: 10%;">
    <h1>Registration successfully.</h1>
</div>


    <!-- footer section starts  -->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>quick links</h3>
                <a href="/index.html"> <i class="fas fa-chevron-right"></i> home </a>
                <a href="/html/services.html"> <i class="fas fa-chevron-right"></i> services </a>
                <!-- <a href="#"> <i class="fas fa-chevron-right"></i> about </a> -->
                <a href="/html/doctors.php"> <i class="fas fa-chevron-right"></i> doctors </a>
                <a href="/html/doctors.php"> <i class="fas fa-chevron-right"></i> booking </a>
            </div>

            <div class="box">
                <h3>our services</h3>
                <a href="/html/services.html"> <i class="fas fa-chevron-right"></i> Free Checkups </a>
                <a href="/html/services.html"> <i class="fas fa-chevron-right"></i> 24/7 Ambulance </a>
                <a href="/html/services.html"> <i class="fas fa-chevron-right"></i> Medicines </a>
                <a href="/html/services.html"> <i class="fas fa-chevron-right"></i> Bed Facility </a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#"> <i class="fas fa-phone"></i> 1324 </a>

                <a href="#"> <i class="fas fa-envelope"></i> medicalcenter@example.com </a>
                <a href="https://goo.gl/maps/gCv8rquk261n7FnXA"> <i class="fas fa-map-marker-alt"></i>Savar, Dhaka-1342, Bangladesh. </a>
            </div>

            <div class="box">
                <h3>follow us</h3>
                <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
                <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
                <a href="#"> <i class="fab fa-instagram"></i> instagram </a>


            </div>

        </div>

        <div class="credit">&copy; created by <span>Group 06</span> | all rights reserved </div>

    </section>

    <!-- footer section ends -->
