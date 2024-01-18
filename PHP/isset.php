<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Vũ Đình Hoàng - 2121050409</title>
  </head>
  <body>
    <h3>Currency exchange</h3>
    <form  action="" method="get">
      <p>Amount:</p>
      <input type="number" name="amount">
      <p>Select currency</p>
      <select name="currency">
        <option value="USD">USD</option>
        <option value="EUR">EUR</option>
        <option value="SGD">SINGAPORE DOLAR</option>
        <option value="JPY">JAPANESE YEN</option>
      </select>
      <input type="submit" value="Convert">
    </form>
  </body>
  <?php
      $exchangeRate = array("USD"=>22300, "EUR"=>27300, "SGD"=>17000, "JPY"=>120);
      if (isset($_GET['amount']))
      {
        $amount = $_GET['amount'];
        $currency = $_GET['currency'];
        echo "$amount USD is equal" . number_format($amount * $exchangeRate[$currency]) . "VND";
      }
  ?>
</html>
