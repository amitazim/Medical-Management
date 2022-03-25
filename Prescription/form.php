<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        table {
            color: white;
            border-radius: 20px;
        }

        #button {
            background-color: green;
            color: white;
            height: 32px;
            width: 85px;
            border-radius: 25px;
        }

        body {
            background: blanchedalmond;
        }
    </style>
</head>

<body>
    <br><br><br><br><br><br><br>
    <form action="pdf.php" method="POST">
        <table border="0" bgcolor="black" align="center" cellspacing="20">

            <tr>
                <td>Serial</td>
                <td><input type="text" placeholder="serial" name="serial"></td>
            </tr>

            <tr>
                <td>Name</td>
                <td><input type="text" placeholder="name" name="name"></td>
            </tr>

            <tr>
                <td>Age</td>
                <td><input type="text" placeholder="age" name="age"></td>
            </tr>

            <tr>
                <td>Date</td>
                <td><input type="date" placeholder="date" name="date"></td>
            </tr>

            <tr>
                <td>Description</td>
                <td><input type="text" placeholder="description" name="des"></td>
            </tr>

            <tr>
                <td colspan="2" textalign="center">
                    <input type="submit" id="button" name="submit">
                </td>
            </tr>
        </table>
    </form>

</body>

</html>