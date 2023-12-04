<h1>Vũ Đình Hoàng - 2121050409</h1>

Ngày:
<select>
  <?php
      for ($day=1; $day <=31 ; $day++) {
        echo "<option value = '$day'>$day</option>";
      }

  #lỗi không đóng thẻ php
</select>

Tháng:
<select>
  <?php
      for ($month=1; $month <=12 ; $month++) {
        echo "<option value = '$month'>$month</option>"   #Thiếu dấu ;

      }
  ?>
</select>

Năm:
<select>
  <?php
      $today = getdate();
      $curYear = $today[year]; #thiếu ""
      for ($year=2003; $year <= $curYear ; $year+=1) {
        echoo "<option value = '$year'>$year</option>"; #echo viết sai

      # không đóng {}
  ?>
</select>
