<?php
    $name       = $_POST['name']; 
    $email      = $_POST['email'];
    $message    = $_POST['message'];

    // Database Connection
    $conn = new mysqli('localhost', 'root', 'password', 'airnest');
    if ($conn->connect_error) {
        die('An error occurred: '.$conn->connect_error);
    } else {
        // $stmt = $conn->prepare("insert into contact(name, email, message) values(?, ?, ?)");
        // $stmt->bind_param("sss", $name, $email, $message);
        // $stmt->execute();
        echo "we did it!!!";
        // $stmt->close();
        $conn->close();
    }

    echo $name;
    echo $email;
    echo $message;
?>