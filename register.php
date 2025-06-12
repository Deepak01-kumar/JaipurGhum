<?php

include('connect.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $reg_name = $_POST['reg-name'];
    $reg_email = $_POST['reg-email'];
    $reg_password= $_POST['reg-password'];
    $sql = "INSERT INTO newuser (Username,Useremail,Password) VALUES ('$reg_name', '$reg_email','$reg_password')";
    if ($conn->query($sql) === TRUE) {
        header("Location: index.html?success=1");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?> 