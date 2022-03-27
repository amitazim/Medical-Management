<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medical Center</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/doctors.css">
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
            <a href="/html/doctors.php">doctors</a>

            <a href="http://localhost:3000/chat/index.php">Chat</a>
            <a href="http://localhost:3000/php/booking.php">booking</a>
            <a href="http://localhost:3000/php/index.php">login</a>
            <a href="http://localhost:3000/php/signup.php">signup</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>

    </header>

    <!-- header section ends -->


    <!-- doctors section starts  -->

    <section class="doctors" id="doctors">

        <h1 class="heading"> our <span>doctors</span> </h1>

        <div class="box-container">


            <?php
            
            include 'db_conn.php';

            $sql = " SELECT * FROM doctor ";
            $query = mysqli_query($conn, $sql);
            while ($Patient_data = mysqli_fetch_array($query)) {
                $dname = $Patient_data['D_Name'];


            ?>

                
                    <div class="box">
                        <img src="/image/doctorlogo.png" alt="">
                        <h2><?php echo $Patient_data['D_Name'];  ?></h2>
                        <span><?php echo $Patient_data['Speciality'];  ?></span>
                        <div class="share">
                            <h3>Gender : <?php echo $Patient_data['Gender'];  ?></h3>
                            <h3>Working : <?php echo $Patient_data['Work_Day'];  ?></h3>
                        </div>

                        <button class="tabbutton" ><a href="booking.php?D_ID=<?php echo $Patient_data['D_ID']; ?>" class="btn btn-danger"><b>BOOK</b></a></button>


                    </div>
              

            <?php

            }

            ?>



        </div>

    </section>

    <!-- doctors section ends -->




    <!-- footer section starts  -->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>quick links</h3>
                <a href="index.html"> <i class="fas fa-chevron-right"></i> home </a>
                <a href="html/services.html"> <i class="fas fa-chevron-right"></i> services </a>
                <!-- <a href="#"> <i class="fas fa-chevron-right"></i> about </a> -->
                <a href="html/doctors.php"> <i class="fas fa-chevron-right"></i> doctors </a>
                <a href="http://localhost:3000/php/booking.php"> <i class="fas fa-chevron-right"></i> booking </a>
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
                <a href="https://goo.gl/maps/gCv8rquk261n7FnXA"> <i class="fas fa-map-marker-alt"></i> Jahangirnagar University, Savar, Dhaka-1342, Bangladesh. </a>
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

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>