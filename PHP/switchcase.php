<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Vũ Đình Hoàng - 2121050409</title>
  </head>
  <body>
    <?php
    $USD = 22300;
    $EUR = 27300;
    $SGD = 17000;
    $JPY = 120;
    $amount = $_GET['amount'];
    $currency = $_GET['currency'];
    echo "$amount USD is equal ";
    switch ($currency) {
      case 'USD':
        echo $amount * $USD;
        // code...
        break;
      case 'EUR':
        echo $amount * $EUR;
          // code...
        break;
      case 'SGD':
        echo $amount * $SGD;
            // code...
        break;
      case 'JPY':
        echo $amount * $JPY;
              // code...
        break;
    }
    echo " VND";
    ?>
  </body>
</html>
