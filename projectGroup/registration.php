<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="" C:\Users\starg\OneDrive\Desktop\style.css"">
    <title> Registration form</title>
    <script src="Validregistration.jsx"></script>
</head>

<body style="background-color:LightYellow;">


    <div class="topnav">
        <!-- <a class="active" href="indexFuelQ.php">FuelQuote</a> -->
        <a href="createUser1.php">create User Profile</a>
        <a href="registration.php">Login Registration</a>
        <a href="index.php">Login Page</a>
    </div>

    <div style="padding-right:100px">

    </div>

    <style>
        body table td th {
            margin: 100px auto;

        }

        table,
        td,
        th {
            border: 1px solid;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }















        body {

            margin: 0px auto;
            font-family: Arial, Helvetica, sans-serif;
        }

        .topnav {

            overflow: hidden;
            background-color: #333;
        }

        .topnav a {




            float: left;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }

        .topnav a.active {
            background-color: #04AA6D;
            color: white;
        }

        .topnav-right {
            float: right;
        }
    </style>












    <!-- <div class="topnav">
        <a class="active" href="index.php">FuelQuote</a>
        <a href="createUser.php">Update User Profile</a>
        <a href="indexFuelHist.php">History</a>
        <a href="logout.php">Logout</a>
    </div> -->

    <div style="padding-right:100px">

    </div>

    <style>
        /* body table td th {
            margin: 100px auto;

        }

        table,
        td,
        th {
            border: 1px solid;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        } */
    </style>

    <br>
    <br>
    <br>

    <header>
        <div align="center">
            <h1 style="color: Teal;"> Create An Account</h1>
        </div>
        <div align="center">
            <h2 style="color: Purple;"> Create an account to begin calculating your estimate</h2>
        </div>
    </header>
    <!-- <form action="registration.php" name="submitF" method="POST"> -->
    <form method="POST" action="registration.php">
        <div align="center">
            <h2><label> Username<br></h2>
            <input name="username" placeholder="username/email" type="text" maxlength="100"><br>
            </label>
            <br>

            <h2><label> Password <br></h2>
            <input name="userPassword" placeholder="password" type="text" maxlength="100"><br>
            </label>

            <br>

            <!-- </form> -->
            <!-- <form action="index.php"></form>
    <button onclick="location.href='index.php';">Create your account</button> -->





            <button type="submit" name="submitR" class="submit">Create your account</button>
    </form>
    <form method="POST" action="index.php">
        <button class="submit">login</button>
    </form>
    <script>
        <?php
        session_start();
        include_once "registration.php";
        $user = 'root';
        $pass = '';
        $db = '4353db8';

        $mysqli = new mysqli('localhost', $user, $pass, $db) or die("unable to connect");

        echo "great work !!!";
        if (isset($_POST['submitR'])) { // submits form
            //authetification values 
            // $usernameid = $_POST['usernameid'];
            $username = $_POST['username'];
            $userPassword = $_POST['userPassword'];
            #// $confPwd = $_POST['confPwd'];
            // $usernameid = $_POST['0'];



            $sql2 = "INSERT INTO username( username, userPassword, users_users_id)  values('$username', '$userPassword',7)";
            echo "$sql2";

            if ($mysqli->query($sql2) === FALSE) {
                echo $mysqli->error;
                echo "Please choose a unique Employee_id or choose a usersname that exist.";
                header('location: registration.php');
                exit(0);
            }
        }





        ?>
    </script>

    </div>
</body>

</html>