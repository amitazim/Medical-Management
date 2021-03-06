
<?php

include_once 'db_conn.php';

$query = mysqli_query($conn, "SELECT * FROM doctor WHERE D_ID='" . $_GET['D_ID'] . "'");
$Patient_data = mysqli_fetch_array($query);

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <title>Medical Center</title>
    
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+P+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

    <!-- font ends -->

    <style>
        /* navbar style starts here */
        body {
            background: rgba(96, 193, 138, 0.722);
        }

        .slidebar {

            border: 20px;
            width: 15%;
            height: 700px;
            position: fixed;
            top: 0px;
            background-color: rgba(195, 179, 179, 0.493);
        }

        .slidebar header {
            padding: 30px 10px;
            text-align: center;
            font-family: 'Mochiy Pop P One', sans-serif;
            font-size: 30px;
            font-weight: bolder;
            color: rgb(16, 95, 98);
        }

        .slidebar header span {
            font-size: 50px;
            color: rgb(89, 161, 87);
        }

        .slidebar ul {}

        .slidebar ul li {

            list-style: none;
            padding: 10px;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            font-weight: bolder;

        }

        .slidebar ul li:hover {
            transform: scale(1.1);
            transition: .5s;
            border-radius: 10px;
            background-color: rgb(89, 150, 152);
            margin-right: 20px;
        }

        .slidebar ul li a {
            text-decoration: none;
        }


        /* slidebar ends */



        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        /* internal style */

        h2 {
            font-size: 40px;

        }

        table {
            border: 2px solid black;
        }

        tr {}

        th {
            padding: 7px;
            border: 2px solid black;
            font-size: 22px;

        }

        td {
            border: 2px solid black;
            padding: 10px 10px 10px 20px;
            font-size: 20px;
            font-weight: bolder;

        }

        button {

            border: solid 2px black;
            border-radius: 15px;
            padding: 2px 6px;
            background-color: rgb(167, 127, 169);

        }

        button a {
            text-decoration: none;
            color: black;
            font-weight: bolder;
            padding: 2px 3px;

        }

        button:hover {
            background-color: greenyellow;
            transition: .5s;
            transform: scale(1.1);
        }

        /* internal style end */
    </style>

</head>

<body>

    <!-- sildebar starts -->

    <div class="slidebar">
        <header>
            <span>
                <i class="fas fa-users-cog"></i><br>
            </span>
            DOCTOR
        </header>
        <ul>
            
            <li>
                <a href="/php/home.php"><i class="fas fa-home"></i> ADMIN</a>
            </li>


        </ul>

        <!-- logoutbutton -->
        <div>
            <style>
                .logout {
                    text-align: center;
                    margin-top: 10px;
                    font-family: 'Mochiy Pop P One', sans-serif;
                    font-weight: bolder;
                }

                .logout:hover {
                    transform: scale(1.2);
                    color: red;
                    transition: 1s;
                }
            </style>
            <a style="text-decoration: none;" href="/php/index.php">
                <div class="logout">
                    Log Out
                </div>
            </a>
        </div>
    </div>

    <!-- slidebar ends -->

    <div class="container">

        <div class="row">
            <div style="margin-left: 50%; margin-top: 5%;">
                <h2> <?php echo $Patient_data['D_Name'];  ?> </h2>
            </div>
            
        </div>
    </div>


    <div class="card-body">
        <div style="margin-left: 20%; margin-top: 1%;">

          <!-- (A) SEARCH FORM -->
          <form method="post" action="search.php">
                <input type="text" name="search" required />
                <input type="submit" value="Search" />
            </form>
            <br>

            <table id="dataTable" width="90%" cellspacing="10">
                <thead>
                    <tr>
                        <th> Patient_ID </th>
                        <th> Patient_Name </th>
                        <th> Gender </th>
                        <th> Age </th>
                        <th> Patient_Type </th>
                        <th> Admit Date </th>
                        <th> Operation </th>

                    </tr>
                </thead>

                <tbody>
                    <?php
                    include 'db_conn.php';
                    $d_id = $Patient_data['D_ID'];

                    $sql = " SELECT * FROM patient where D_ID ='".$d_id."'";
                    $query = mysqli_query($conn, $sql);
                    while ($Patient_data = mysqli_fetch_array($query)) {

                    ?>
                        <tr>
                            <td><b><?php echo $Patient_data['P_ID'];  ?></b></td>
                            <td><?php echo $Patient_data['P_Name'];  ?></td>
                            <td><?php echo $Patient_data['Gender'];  ?></td>
                            <td><?php echo $Patient_data['Age'];  ?></td>
                            <td><?php echo $Patient_data['P_Type'];  ?></td>
                            <td><?php echo $Patient_data['A_Date'];  ?></td>
                            <td style="width: 140px;">

                                <button> <a href="/php/prescription/update.php?P_ID=<?php echo $Patient_data['P_ID'];  ?>" class="btn btn-success"><b>PRESCRIBE</b></a></button>

                                



                            </td>
                        </tr>
                    <?php

                    }

                    ?>

                </tbody>
            </table>
        </div>


    </div>



</body>

</html>