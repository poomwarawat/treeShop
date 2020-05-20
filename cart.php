<!DOCTYPE html>
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
      <div class="row cart-product detail-product">
        <div class="col-sm-3 col-12">
          <h3>รูปสินค้า</h3>
          <img
            class="cart-product-image"
            src="https://images.pexels.com/photos/736230/pexels-photo-736230.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
          />
          <div class="alert alert-primary mt-2 text-center">
            ดอกไม้
          </div>
        </div>
        <div class="col-sm-3 col-12">
          <h3>รูปสินค้า</h3>
          <div class="alert alert-secondary w-100">
            550 บาท
          </div>
        </div>
        <div class="col-sm-3 col-12">
          <h3>จำนวน</h3>
          <div class="row">
            <div class="col-sm-3 col-3 mt-2">
              <button class="btn btn-primary">-</button>
            </div>
            <div class="col-sm-3 col-3 mt-2">
              <p class="product-number">2</p>
            </div>
            <div class="col-sm-3 col-3 mt-2">
              <button class="btn btn-primary">+</button>
            </div>
          </div>
        </div>
        <div class="col-sm-3 col-12">
          <h3>ราคารวม</h3>
          <div class="alert alert-secondary">
            1100 บาท
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="alert alert-success mt-3">
        <div class="row">
          <div class="col-sm-6 col-12">
            <h3>สรุปรายการสินค้า</h3>
          </div>
          <div class="col-sm-2 col-12">
            <p class="mt-2">1 รายการ 2 ชิ้น</p>
          </div>
          <div class="col-sm-4 col-12">
            <p class="mt-2">ราคาทั้งหมด 1100 บาท</p>
          </div>
        </div>
      </div>
    </div>

    <div class="request-access">
      <div class="p-2">
        <button class="btn btn-danger w-100 ml-1">ยกเลิก</button>
      </div>
      <div class="p-2">
        <button class="btn btn-primary w-100 ml-1">สั่งซื้อ</button>
      </div>
    </div>
  </body>
</html>
