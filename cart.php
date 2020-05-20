<!DOCTYPE html>
<?php
    session_start();
    include "./conn.php";
    $username = $_SESSION['username'];
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
  </head>
  <body>
    <?php
    include "./navbar.php";
    ?>

    <div class="category-nav-bar">
      <div class="container">
        <div class="row text-center category-nav">
          <div class="col-12">
            <h3>ตะกร้า</h3>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
        <?php
            $productCount = 0;
            $itemCount = 0;
            $TotalAllPrice = 0;
            $sql = "SELECT * FROM cart INNER JOIN product ON cart.productID=product.id WHERE cart.username='$username'";
            $result = mysqli_query($conn, $sql);
            $result_check = mysqli_num_rows($result);
            if($result_check > 0){
                while($row = mysqli_fetch_assoc($result)){
                    $productCount += $row['total'];
                    $TotalAllPrice += $row['totalPrice'];
            
        ?>
      <div class="row cart-product detail-product">
        <div class="col-sm-3 col-12">
          <h3>รูปสินค้า</h3>
          <img
            class="cart-product-image"
            src="./img/A/<?php echo $row['pic1']?>"
          />
          <div class="alert alert-primary mt-2 text-center">
            <?php echo $row['name']?>
          </div>
        </div>
        <div class="col-sm-3 col-12">
          <h3>ราคาต่อชิ้น</h3>
          <div class="alert alert-secondary w-100">
            <?php echo $row['price']?> บาท
          </div>
        </div>
        <div class="col-sm-3 col-12">
            <h3>จำนวน</h3>
            <div class="alert alert-secondary">
            <?php echo $row['total']?> ชิ้น
            </div>
        </div>
        <div class="col-sm-3 col-12">
          <h3>ราคารวม</h3>
          <div class="alert alert-secondary">
          <?php echo $row['totalPrice']?> บาท
          </div>
        </div>
      </div>
      <?php
          }
        }
      ?>
    </div>

    <div class="container">
      <div class="alert alert-success mt-3">
        <div class="row">
          <div class="col-sm-6 col-12">
            <h3>สรุปรายการสินค้า</h3>
          </div>
          <div class="col-sm-2 col-12">
            <p class="mt-2"><?php echo $productCount?> ชิ้น</p>
          </div>
          <div class="col-sm-4 col-12">
            <p class="mt-2"><?php echo $TotalAllPrice?> บาท</p>
          </div>
        </div>
      </div>
    </div>

    <div class="request-access">
      <div class="p-2">
        <form action="./clearcartdata.php" method="POST">
            <button type="submit" class="btn btn-danger w-100 ml-1">ยกเลิก</button>
        </form>
      </div>
      <div class="p-2">
        <button class="btn btn-primary w-100 ml-1">สั่งซื้อ</button>
      </div>
    </div>
  </body>
</html>
