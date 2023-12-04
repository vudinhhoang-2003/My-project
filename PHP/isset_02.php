<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Vũ Đình Hoàng - 2121050409</title>
  </head>
  <body>
    <form  action="" method="get">
      <p>First Number: </p>
      <input type="number" name="firstNumber"><br>
      <p>Second Number: </p>
      <input type="number" name="secondNumber"><br>
      <p></p>
      <input type="submit" name="add" value="+">
      <input type="submit" name="minus" value="-">
      <input type="submit" name="multiphy" value="*">
      <input type="submit" name="divide" value="/">
    </form>
    <?php
        if (isset($_GET['add']))
        {
          $result = $_GET["firstNumber"] + $_GET["secondNumber"];
          echo "$result";
          // code...
        }
        elseif (isset($_GET['minus']))
        {
          $result = $_GET["firstNumber"] - $_GET["secondNumber"];
          echo "$result";
          // code...
        }
        elseif (isset($_GET['multiphy']))
        {
          $result = $_GET["firstNumber"] * $_GET["secondNumber"];
          echo "$result";
          // code...
        }
        elseif (isset($_GET['divide']))
        {
          $result - $_GET["firstNumber"] / $_GET["secondNumber"];
          echo "$result";
          // code...
        }

    ?>
  </body>
</html>
