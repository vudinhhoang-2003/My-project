<?php
    // Vũ Đình Hoàng - 2121050409

    $Origin = $_GET['Origin'];
    $Destination = $_GET['Destination'];
    $Duration = $_GET['Duration'];
    // connect to the database
    require 'connect.php';
    mysqli_set_charset($conn, 'UTF8');
    // connect sql to insert data
    $sql = "INSERT INTO flights SET origin = '$Origin', destination = '$Destination', duration = $Duration";
    // run the sql query
    if ($conn->query($sql) === TRUE)
    { // mo if 1
      echo "New flight created successfully";
    } // dong if 1
    else
    {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    // close the connection
    $conn->close();
?>
