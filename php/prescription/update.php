<?php
$Gender = isset($_POST['Gender']) ? $_POST['Gender'] : '';
include_once 'db_conn.php';






$query = mysqli_query($conn, "SELECT * FROM patient WHERE P_ID='" . $_GET['P_ID'] . "'");
$Patient_data = mysqli_fetch_array($query);

$query1 = mysqli_query($conn, "SELECT * FROM doctor WHERE D_ID='" . $Patient_data['D_ID'] . "'");
$dname = mysqli_fetch_array($query1);

 $dname['D_Name'];

 

?>

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


    table {
      color: white;
      /* border-radius: 20px; */
      font-size: 20px;
    }

    input {
      font-size: 20px;
    }

    #button {
      background-color: green;
      color: white;
      height: 32px;
      width: 85px;
      border-radius: 25px;
    }
  </style>
  <!-- <link rel="stylesheet" href="/css/style.css"> -->
</head>

<body>
  <!-- Begin Page Content -->
  <div class="container" style="margin-top: 3%;margin-bottom: 5%;width: 75%;">
    <!-- Area Chart -->

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
          <a href="/php/prescription/patient.php"> PRESCRIPTION</a>
        </li>
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

    <br><br><br><br><br>
    <form action="pdf.php" method="POST">
      <table border="0" bgcolor="black" align="center" cellspacing="20">


      <tr>
          <td>Doctor Name</td>
          <td><input type="text" placeholder="doctor" name="doctor" value="<?php echo $dname['D_Name']; ?>"></td>
        </tr>

        <tr>
          <td>ID</td>
          <td><input type="text" placeholder="serial" name="serial" value="<?php echo $Patient_data['P_ID']; ?>"></td>
        </tr>

        <tr>
          <td>Name</td>
          <td><input type="text" placeholder="name" name="name" value="<?php echo $Patient_data['P_Name']; ?>"> </td>
        </tr>

        <tr>
          <td>Age</td>
          <td><input type="text" placeholder="age" name="age" value="<?php echo $Patient_data['Age']; ?>"></td>
        </tr>

        <tr>
          <td>Date</td>
          <td><input type="date" placeholder="date" name="date" value="<?php echo $Patient_data['A_Date']; ?>" class="" name="A_Date"></td>
        </tr>
        <div class="pres">

          <tr>
            <td>PRESCRIPTION</td>
            <td ><input type="text" placeholder="Prescription" name="des" ></td>
          </tr>
        </div>


        <tr>
          <td colspan="2" textalign="center">
            <input type="submit" id="button" name="submit">
          </td>
        </tr>
      </table>
    </form>














  </div>
  </div>

  </div>


</body>

</html>