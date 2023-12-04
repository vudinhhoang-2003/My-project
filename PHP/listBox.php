<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Vũ Đình Hoàng - 2121050409</title>
  </head>
  <body>
    Ngày:
    <select>
      <?php
          for ($day=1; $day <=31 ; $day++) {
            echo "<option value = '$day'>$day</option>";
          }
      ?>
    </select>

    Tháng:
    <select>
      <?php
          for ($month=1; $month <=12 ; $month++) {
            echo "<option value = '$month'>$month</option>";
          }
      ?>
    </select>

    Năm:
    <select>
      <?php
          $today = getdate();
          $curYear = $today["year"];
          for ($year=1900; $year <= $curYear ; $year+=1) {
            echo "<option value = '$year'>$year</option>";
          }
      ?>
    </select>
  </body>
</html>
