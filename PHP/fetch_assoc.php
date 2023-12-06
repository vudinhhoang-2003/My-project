<?php
    // connect to the database
    require 'connect.php';
    mysqli_set_charset($conn, 'UTF8'); // sửa lỗi tiếng Việt
    // // Create sql to select data
    $sql = "SELECT * FROM flights";
    // run the query and store result to a variable
    $result = $conn->query($sql);
    print_r($result); // In $result
    // process received data
    $row = $result->fetch_assoc();
    echo "<br>";
    print_r($row);
    $row = $result->fetch_assoc();
    echo "<br>";
    print_r($row);
    // close the connection
    $conn->close();
?>
