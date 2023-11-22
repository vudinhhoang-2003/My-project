<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Vũ Đình Hoàng - 2121050409</title>
  </head>
  <body>
    <?php
    $USD = 2300;
    $AUD = 17000;
    $JPY = 200;
    $EUR = 27000;
    $amount = $_GET['amount'];
    $currency = $_GET['currency'];
    echo "$amount $currency is equal ";
    switch ($currency) {
      case 'USD':
        echo $amount * $USD;
        // code...
        break;
      case 'AUD':
        echo $amount * $EUR;
          // code...
        break;
      case 'JPY':
        echo $amount * $SGD;
            // code...
        break;
      case 'EUR':
        echo $amount * $JPY;
              // code...
        break;
    }
    echo " VND";
    ?>
  </body>
</html>
