<?php
    session_start();
    include "./conn.php";

    $username = $_SESSION['username'];
    $orderId = uniqid();
    $totalPrice = $_GET['totalPrice'];
    $sql = "UPDATE cart SET status='order' WHERE username='$username'";
    mysqli_query($conn, $sql);

    $sql1 = "INSERT INTO orderProduct (orderID, username, totalPrice, status) VALUES ('$orderId','$username', '$totalPrice', 'order')";
    if(mysqli_query($conn, $sql1)){
        header("Location: ./index.php");
        exit;
    }    
?>