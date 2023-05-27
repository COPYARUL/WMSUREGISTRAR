<?php

function insertUser( $userName, $userEmail, $userCourse) {

    $servername = "localhost"; 
    $username = "root"; 
    $password = ""; 
    $dbname = "WMSU"; 
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    echo "Connected successfullyd";
    
    $query = "INSERT INTO `user`(`USER_NAME`, `USER_EMAIL`, `USER_COURSE`)
              VALUES ( '$userName', '$userEmail', '$userCourse')";
    if ($conn->query($query) === TRUE) {
        echo "User inserted successfully.";
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
    $conn->close();
}


insertUser('Jb', 'jb@example.com', 'Computer Science');

?>