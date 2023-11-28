<?php
    function dislay_image_list($imageList)
    {
      foreach ($imageList as $item)
      {
        echo "<img src='Images/$item'
        width = 50px height = 50px alt = '$item'>";

      }
    }
    $items = array('1.jpg', '2.jpg', '3.jpg');
    dislay_image_list($items);
?>
<h2> Vũ Đình Hoàng - 2121050409</h2>
<h1>function</h1>
<?php
    $items = array('2.jpg', '3.jpg');
    dislay_image_list($items);
?>
