<?php
    // Vũ Đình Hoàng - 2121050409
    // connect to the database
    require 'connect.php';
    // connect sql to insert data
    $sql = "INSERT INTO flights (Origin, Destination, Duration) VALUES ('Hà Nội', 'Đà Nẵng', '1000')";
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
