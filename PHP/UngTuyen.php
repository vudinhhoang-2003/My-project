<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Vũ Đình Hoàng - 2121050409</title>
  </head>
  <body>
    <?php
        $Toan = $_GET['diemtoan'];
        $Ly = $_GET['diemly'];
        $Hoa = $_GET['diemhoa'];
        $Sum = $Toan + $Ly + $Hoa;

        if ($Sum >= 22) {
          echo "Bạn đã trúng tuyển ngành CNTT chất lượng cao";
        }
        else {
          echo "Bạn đã trượt";
        }
    ?>
  </body>
</html>
