<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Vũ Đình Hoàng - 2121050409</title>
    <link rel="stylesheet" type="text/css" href="CSS/">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <?php
        require 'connect.php';

        $sql = "SELECT * FROM flights";
        $result = $conn->query($sql);
        if ($result->num_rows> 0)
        {
            echo "<div>
            <caption><h2>Bảng thông tin chuyến bay</h2></caption>

            <table class='table table-striped'>
              <thead class='thead-'>
                <tr>
                    <th>FlightID</th>
                    <th>Origin</th>
                    <th>Destination</th>
                    <th>Duration</th>
                </tr>
              </thead>
            </div>";
            while ($row = $result->fetch_assoc())
            {
              ?>
              <tr>
                  <td> <?php echo $row['id'];?> </td>
                  <td> <?php echo $row['origin'];?> </td>
                  <td> <?php echo $row['destination'];?> </td>
                  <td> <?php echo $row['duration'];?> </td>
              </tr>

            <?php

          };
        }
        else {
            echo "No flight in database";
        }
        // $conn->close();
    ?>

</body>
</html>
