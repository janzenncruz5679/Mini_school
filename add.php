<?php

include_once("connections/connections.php");


if (isset($_POST['submit'])) {
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];

    $sql = "INSERT INTO `student_list`( `first_name`, `last_name`) VALUES ('$fname','$lname')";
    $con->query($sql) or die($con->error);

    echo header("Location: index.php");
}
// if (isset($_POST['submit'])) {
//     $usertype = $_POST['type'];

//     if ($usertype == 1) {
//         $sql = "SELECT * FROM `student_user` WHERE type= '$usertype'";
//         $con->query($sql) or die ($con->error);
//         echo header("Location: index.php");

//     }
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    <?php require './include/head.php' ?>
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <h1>Student Management System</h1>
    <br>
    <br>
    <table>
        <form action="" method="post">
            <label>First Name</label>
            <input type="text" name="firstname" id="firstname">

            <label>Last Name</label>
            <input type="text" name="lastname" id="lastname">

            <input type="submit" name="submit" value="Submit">
        </form>
</body>

</html>