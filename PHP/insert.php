<?php
    // connect to the database
    require 'connect.php';
    // connect sql to insert data
    $sql = "INSERT INTO flights (Origin, Destination, Duration) VALUES ('Hà Nội', 'Paris', '4000')";
    // run the sql query
    $conn->query($sql);
    // close the connection
    $conn->close();
?>
