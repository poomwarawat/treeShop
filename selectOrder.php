<?php
    $orderID = $_POST['orderID'];
    echo $orderID;
    header("Location: ./status.php?orderID=$orderID");
    exit;
?>