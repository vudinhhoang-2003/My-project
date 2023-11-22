<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Vũ Đình Hoàng - 2121050409</title>
  </head>
  <body>
    <?php
      $weight = $_GET['weight'];
      $height = $_GET['height'];

      if ($_GET['gender'] == 'Nam') {
        if ($height > 1.6 && $weight >= 50) {
          echo "bạn đạt yêu cầu vào công ty";
        }
        else {
          echo "bạn bị loại";
        }
      }
      elseif ($_GET['gender'] == 'Nu') {
        if ($height > 1.5 && 40 <= $weight && $weight <= 70) {
          echo "bạn đạt yêu cầu vào công ty";
        }
        else {
          echo "bạn bị loại";
        }
      }
    ?>
  </body>
</html>
