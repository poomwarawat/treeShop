<?php
    include "./conn.php";
    $username = $_POST['inputusername'];

    $sql = "SELECT * FROM orderProduct WHERE username='$username' AND status='order'";
    $result = mysqli_query($conn, $sql);
    $result_check = mysqli_num_rows($result);

    if($result_check > 0){
        while($row = mysqli_fetch_assoc($result)){
            header("Location: ./payment.php?orderId=".$row['orderID']);
            exit;
        }
    }else{
        header("Location: ./payment.php?error=1");
        exit;
    }
?>