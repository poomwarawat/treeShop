<!DOCTYPE html>
<?php    
    include "./conn.php";        
?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Prompt:wght@200&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
      integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
      crossorigin="anonymous"
    />
    <!-- JS, Popper.js, and jQuery -->
    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
      integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style.css" />
    <script src="./cart.js"></script>
  </head>
  <body>
    <?php
        include "./navbar.php";
    ?>

    <div class="category-nav-bar">
      <div class="container">
        <div class="row text-center category-nav">
          <div class="col-12">
            <h3>ตรวจสอบสถานะ</h3>
          </div>
        </div>
      </div>
    </div>

    <div class="container mt-4">
    <form action="./selectOrder.php" method="POST">
    <h3>ตรวจสอบสถานะ</h3>
      <select name="orderID" class="form-control">
          <?php
            $sql = "SELECT * FROM orderProduct";
            $result = mysqli_query($conn, $sql);
            $result_check = mysqli_num_rows($result);

            if($result_check > 0){
                while($row = mysqli_fetch_assoc($result)){            
          ?>
        <option value="<?php echo $row['orderID']?>">
            Order ID : <?php echo $row['orderID']?> จัดซื้อโดย <?php echo $row['username']?>
        </option>        
        <?php
            }    
        }
        ?>
      </select>
      <button class="btn btn-primary mt-2" type="submit">select</button>
    </form>
    <?php
        if($_GET['orderID']){ 
            $orderID = $_GET['orderID'];
            $sq1 = "SELECT * FROM orderProduct WHERE orderID='$orderID'"; 
            $result1 = mysqli_query($conn, $sq1);
            $result_check1 = mysqli_num_rows($result1);
            
            while($row1 = mysqli_fetch_assoc($result1)){                                
    ?>
    <div class="mt-4 address-area">
      <h3>รายการคำสั่งซื้อ <?php echo $row1['orderID']?></h3>
      <div class="row">
        <div class="col-sm-6 col-12 mt-4">
            <h5>ที่อยู่การจัดสั่ง</h5>
            <p>ชื่อ : <?php echo $row1['name']?></p>
            <p>เบอร์โทร : <?php echo $row1['phone']?></p>
            <p>ที่อยู่ : <?php echo $row1['location']?></p>
        </div>
        <div class="col-sm-5 col-12 mt-4 text-center pt-3">
            <p>วิธีการจัดส่ง</p>
            <p>ค่าจัดส่ง 50 บาท หากยอดชำระเกิน 500 บาท จัดส่งฟรี</p>
            <p>(จัดส่งโดย Kerry)</p>            
        </div>
      </div>
    </div>
    <div class="address-area mt-4">
        <div class="row">
            <div class="col-sm-4 col-12 mt-2">
                <p>รายละเอียดการชำระเงิน</p>
                <p>ยอดสั่งซื้อรวม : <?php echo $row1['totalPrice']?> บาท</p>
            </div>
            <div class="col-sm-4 col-12 mt-2">
                <p>ชื่อบัญชี : Happy Tree Friends</p>
                <p>เลขบัญชี : 123-4567-890</p>
                <p>ธนาคารไทยพานิชย์</p>
            </div>
            <?php
                if($row1['location'] != ""){
                    echo '
                    <div class="col-sm-4 col-12 mt-2">
                        <p>สถานะการจัดส่ง</p>
                        <p>กำลังจัดส่งสินค้า...</p>                
                        <img src="https://cdn2.iconfinder.com/data/icons/shipping-delivery-6/96/shipping_delivery_fullfillment_trunk_van_car_travel_air_transportation_vehicle_delivering-512.png" width="80px" height="80px">
                    </div>
                ';
                }
            ?>            
        </div>
    </div>
    <?php
        }
    }
    ?>
    </div>    
  </body>
</html>
