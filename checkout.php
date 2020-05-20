<?php
    include "./conn.php";
    $orderId = $_GET['orderId'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $location = $_POST['location'];

    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["slip"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["slip"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
    }

    // Check if file already exists
    if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["slip"]["size"] > 50000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
    }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
    if (move_uploaded_file($_FILES["slip"]["tmp_name"], $target_file)) {
        $urlpic = "./uploads/".basename( $_FILES["slip"]["name"]);
        $sql = "UPDATE orderProduct SET status='paid', name='$name', phone='$phone', location='$location', uploadslip='$urlpic' WHERE orderID='$orderId'";
        if(mysqli_query($conn, $sql)){
            header("Location: ./payment.php?upload=1");
            exit;
        }
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}    
?>