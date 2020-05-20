<!DOCTYPE html>
<?php
    include "./conn.php";
    $productID = $_GET['id'];    
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
            <h3>รายละเอียดสินค้า</h3>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row detail-product">
        <div class="col-sm-7 col-12">
          <div class="row">
            <?php
                $sql = "SELECT * FROM product INNER JOIN ProductType ON product.type=ProductType.shortType WHERE product.id='$productID'";
                $result = mysqli_query($conn, $sql);
                $result_check = mysqli_num_rows($result);

                if($result_check > 0){
                    while($row = mysqli_fetch_assoc($result)){                                                                
            ?>
            <div class="col-sm-8">
              <div class="row picture-list-product">
                <div class="col-sm-7 col-12">
                  <img
                    src="./img/A/<?php echo $row['pic1']?>"
                    class="product-image"
                  />
                  <div class="alert-info alert mt-2">
                    <?php echo $row['name']?>
                  </div>
                </div>
                <div class="col-sm-4 productside-list">
                  <div>
                    <img
                      class="side-picture"
                      src="./img/A/<?php echo $row['pic2']?>"
                    />
                  </div>
                  <div>
                    <img
                      class="side-picture"
                      src="./img/A/<?php echo $row['pic3']?>"
                    />
                  </div>
                  <div>
                    <img
                      class="side-picture"
                      src="./img/A/<?php echo $row['pic4']?>"
                    />
                  </div>
                  <div>
                    <img
                      class="side-picture"
                      src="./img/A/<?php echo $row['pic5']?>"
                    />
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-4 col-12 picture-list-product">
              <div class="mt-3">
                <p>หมวดหมู่ : <span><?php echo $row['nameType']?></span></p>
              </div>
              <div class="mt-3">
                <p>ราคา : <span><?php echo $row['price']?> บาท</span></p>
              </div>
              <div class="mt-3">
                <p>สถานะ : <span>มาซื้อไอ้สัส</span></p>
              </div>
              <div class="mt-3">
                <p>ลงสินค้า : <span><?php echo $row['created']?></span></p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-5 col-12">
          <div class="detail1">
            <h5>รายละเอียดสินค้า</h5>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Commodi
              corporis natus, labore, quae ab distinctio quo deserunt,
              reprehenderit maxime unde molestias voluptatum fugit repellendus.
              Placeat vero debitis nemo consectetur dolorum?
            </p>
          </div>
          <div class="detail2">
            <h5>เคล็ดลับ</h5>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi
              sint amet veniam beatae, similique et ipsa aliquid voluptas vel
              accusamus quia deserunt quae aspernatur alias aut necessitatibus
              eos facilis ratione.
            </p>
          </div>
        </div>
        <?php
            }
        }
        ?>
      </div>
    </div>
  </body>
</html>
