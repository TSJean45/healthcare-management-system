<?php

$mysqli = new mysqli('localhost', 'root', '', 'jjjhms') or die(mysqli_error($mysqli));
if (isset($_POST["add"])) {
    $name = $_POST["inputStockName"];
    $qty = $_POST["inputStockAmount"];
    $expDate = $_POST["inputStockExpire"];

    $mysqli->query("INSERT INTO medstock (stockName,stockQty,stockExpDate) VALUES ('$name','$qty','$expDate') ") or
        die($mysqli->error);
}
