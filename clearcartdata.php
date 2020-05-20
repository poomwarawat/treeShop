<?php
    session_start();
    include "./conn.php";
    $username = $_SESSION['username'];

    $sql = "DELETE FROM cart WHERE username='$username'";
    if (mysqli_query($conn, $sql)) {
        header("Location: ./category.php?type=A");
        exit;
    }
?>