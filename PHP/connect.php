
<!--Vũ Đình Hoàng - 2121050409  -->

<?php
    $servername ="localhost";
    $username= "root";
    $passwork=""; //không có pass
    $db="hoang";
    //Crearte connection
    $conn = new mysqli($servername, $username, $passwork, $db);
    //Check connection
    if($conn->connect_error)
    {
        die("Connection failed:" . $conn->connect_error);
    }
    echo "Connectted successfully <br>";
?>
