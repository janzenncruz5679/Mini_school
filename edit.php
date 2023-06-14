<?php

include_once("connections/connections.php");
$id = $_GET['ID'];

$sql = "SELECT * FROM student_list WHERE id = '$id'";
$students = $con ->query($sql) or die($con->error);
$row = $students->fetch_assoc();

if (isset($_POST['submit'])) {
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];


    $sql = "UPDATE student_list SET first_name = '$fname', last_name = '$lname' WHERE id = '$id'";
    $con->query($sql) or die ($con->error);

    echo header("Location: details.php?ID=".$id);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <h1>Student Management System</h1>
    <br>
    <br>
    <table>
        <form action="" method="post">
            <label>First Name</label>
            <input type="text" name="firstname" id="firstname" value="<?php echo $row['first_name'];?>">

            <label>Last Name</label>
            <input type="text" name="lastname" id="lastname" value="<?php echo $row['last_name'];?>">

            <input type="submit" name="submit" value="Update">
        </form>
</body>
</html>