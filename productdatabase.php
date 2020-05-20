<?php
    session_start();
    include "./conn.php";
    $username = $_SESSION['username'];
    $productID = $_GET['productID'];    
    $total = $_POST['total'];    
    $price = $_GET['price'];
    $totalPrice =  $total *  $price;
    
    $sql = "INSERT INTO cart (username, productID, total, totalPrice, status) VALUES ('$username', '$productID', $total, $totalPrice, 'cart')";
    if(mysqli_query($conn, $sql)){
        header("Location: ./product.php?id=$productID&addcart=1");
        exit;
    }
?>