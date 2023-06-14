<?php

        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "student_system";

        $con = mysqli_connect($host, $username, $password, $database);

        if ($con->connect_error) {
            echo $con->connect_error;
        }else {
            return $con;
        }