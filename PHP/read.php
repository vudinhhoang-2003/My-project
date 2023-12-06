<?php
    // connect to the database
    require 'connect.php';
    mysqli_set_charset($conn, 'UTF8'); // sửa lỗi tiếng Việt
    // // Create sql to select data
    $sql = "SELECT * FROM flights";
    // run the query and store result to a variable
    $result = $conn->query($sql);
    // process received data
    if ($result->num_rows > 0) // kiểm tra có kết quả trả về (2D array)
    { // nếu còn dữ liệu trong bảng
        while ($row = $result->fetch_assoc())
        { // đọc dữ liệu từng dòng
            echo "FlightID: " . $row["id"].
                 "Origin: " . $row["origin"].
                 "Destination: " . $row["destination"].
                 "Duration: " . $row["duration"]."<br>";
        }
    }
    else {
      echo "No flight in database";
    }
    // close the connection
    $conn->close();
?>
