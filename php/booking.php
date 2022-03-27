<?php

include_once 'db_conn.php';

$query = mysqli_query($conn, "SELECT * FROM doctor WHERE D_ID='" . $_GET['D_ID'] . "'");
$Patient_data = mysqli_fetch_array($query);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medical Center</title>    <!-- font awesome cdn link  -->
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



    <!-- booking section starts   -->

    <section class="book" id="book">

        <h1 class="heading"> <span>book</span> now </h1>

        <div class="row">
            <form action="/php/book.php" method="post">
                <h3>Appointment for <br> <?php echo $Patient_data['D_Name']; ?>  </h3>

                <h2>ID of <?php echo $Patient_data['D_Name']; ?>  <span class="msg"> *Please do not change</span></h2>
                <input type="number" placeholder="number" name="D_ID" class="box" value="<?php echo $Patient_data['D_ID']; ?>" required>


                <h2>Patient Name</h2>
                <input type="text" placeholder="patient name" name="P_Name" class="box" required>

                <h2>Gender</h2>
                <label for="male" class="box"><input type="radio" name="Gender" value="Male" id="male" /> Male</label>
                <label for="female" class="box"><input type="radio" name="Gender" value="Female" id="female" /> Female</label>
                <label for="others" class="box"><input type="radio" name="Gender" value="Others" id="others" /> Others</label>

                <h2>Patient Age</h2>
                <input type="number" placeholder="number" name="Age" class="box" required>

                <h2>Patient Type</h2>
                <input list="browsers" name="P_Type" id="browser" class="box" required>
                <datalist id="browsers">
                    <option value="Student">
                    <option value="Teacher">
                    <option value="Staff">
                </datalist>

                <h2>Admit Date</h2>
                <input type="date" id="day" class="box" name="A_Date" required>

                <input type="submit" value="book now" class="btn">
            </form>

        </div>

    </section>

    <!-- booking section ends -->




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
                <a href="https://goo.gl/maps/gCv8rquk261n7FnXA"> <i class="fas fa-map-marker-alt"></i> Jahangirnagar
                    University, Savar, Dhaka-1342, Bangladesh. </a>
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