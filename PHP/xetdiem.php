<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
        $Toan = $_GET['diemtoan'];
        $Ly = $_GET['diemly'];
        $Hoa = $_GET['diemhoa'];
        $Anh = $_GET['diemanh'];
        $Van = $_GET['diemvan'];
        $Su = $_GET['diemsu'];

        $Mean = ($Toan + $Ly + $Hoa + $Anh + $Van + $Su)/6;

        echo "Kết quả:";

        if ($Toan > 10 or $Toan <0 or $Ly > 10 or $Ly<0 or $Hoa > 10 or $Hoa<0 or $Anh > 10 or $Anh<0 or $Van >10 or $Van <0 or $Su > 10 or $Su <0)
          // code...
        {
          echo "Điểm không đúng yêu cầu";
        }

        elseif ($Toan <4 or $Ly < 4 or $Hoa < 4 or $Anh < 4 or $Van <4 or $Su <4)
        {
            echo "Học lực yếu";
        }

        elseif ($Mean < 5)
        {
          echo "Học sinh yếu";
        }
        elseif (5 <= $Mean and $Mean <= 6.4)
        {
          echo "Học sinh trung bình";
        }
        elseif ( 6.5 <= $Mean and $Mean <= 7.9)
        {
          echo "Học sinh khá";
        }
        elseif ($Mean > 7.9)
        {
          echo "Học sinh giỏi";
        }
    ?>
  </body>
</html>
