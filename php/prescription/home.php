<!DOCTYPE html>
<html lang="en">

<head>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Medical Center</title>
     <!-- fonts -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+P+One&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

     <!-- CSS STYILE  -->

     <style>
          body {
               margin: 0;
          }


          /* navbar style starts here */
          .slidebar {

               border: 20px;
               width: 15%;
               height: 700px;
               position: absolute;
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

          /* body decoratin starts */
          .mainpart {
               background: rgba(96, 193, 138, 0.722);
               width: 85%;
               height: 700px;
               float: right;
               position: relative;
          }

          .infocard {
               margin: 30px;
               margin-top: 20px;
               width: 80%;
               height: 580px;
               position: fixed;
               text-align: center;



          }

          .button {
               height: 160px;
               width: 26%;
               float: left;
               margin: 20px;
               border: solid black 20px;
               border-radius: 30px;
               font-weight: bold;
               color: #3241c2;
               font-size: 15px;
               font-family: 'Mochiy Pop P One', sans-serif;
               padding: 10px;
               padding-top: 10px;
               text-decoration: none;

          }

          .button:hover {
               transform: scale(1.1);
               background: rgba(108, 154, 117, 0.813);
               transition: 1s;


          }

          .number {
               font-size: 25px;
               padding-top: 40px;
               color: rgb(85, 12, 99);
          }


          /* logout button */


          .log h3 {
               position: fixed;
               top: 5px;
               right: 5%;
               border: black solid;
               padding: 10px;
               border-radius: 20px;
               font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
               font-weight: bolder;
          }

          .log h3 a {
               text-decoration: none;
               color: black;
          }

          .log h3:hover {
               transition: .5s;
               transform: scale(1.1);
               background: red;

          }


.button{
    background: none;
    border: none;
}


     </style>


</head>

<body>
     <!-- slidebar -->

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

     <!-- mainpart -->

     <div class="mainpart">

          <div class="infocard">
               <h1> <br> Dashboard <br><br></h1>
               <div class="box-container">


<?php

include 'db_conn.php';

$sql = " SELECT * FROM doctor ";
$query = mysqli_query($conn, $sql);
while ($Patient_data = mysqli_fetch_array($query)) {
    $dname = $Patient_data['D_Name'];


?>

    <button class="button" ><a href="patient.php?D_ID=<?php echo $Patient_data['D_ID']; ?>"><b>

            
            <h2><?php echo $Patient_data['D_Name'];  ?></h2>
            
            

            
        
            
            


        
  </b></a></button>

<?php

}

?>



</div>
          </div>

     </div>





     <div class="log">

          <h3>
               <a href="/php/login.php">
                    LOG OUT
               </a>
          </h3>
     </div>

</body>

</html>