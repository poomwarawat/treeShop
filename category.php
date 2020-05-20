<!DOCTYPE html>
<?php
    include "./conn.php";
    $type = $_GET['type'];    
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
          <div class="col-sm-2 col-12">
            <a class="none-color-a" href="./category.php?type=A">
                <p>ไม้ดอก</p>
            </a>
          </div>
          <div class="col-sm-2 col-12">
            <a class="none-color-a" href="./category.php?type=B">
                <p>ไม้ผล-ยืนต้น</p>
            </a>
          </div>
          <div class="col-sm-2 col-12">
          <a class="none-color-a" href="./category.php?type=C">
            <p>ไม้ประดับภายใน</p>
            </a>
          </div>
          <div class="col-sm-2 col-12">
          <a class="none-color-a" href="./category.php?type=D">
            <p>ไม้ประดับภายนอก</p>
            </a>
          </div>
          <div class="col-sm-2 col-12">
          <a class="none-color-a" href="./category.php?type=E">
            <p>สมุนไพร</p>
            </a>
          </div>
          <div class="col-sm-2 col-12">
          <a class="none-color-a" href="./category.php?type=F">
            <p>อุปกรณ์ทำสวน</p>
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- flower list -->
    <div class="container">
      <h3 class="mt-4">ไม้ดอก(Flowering plant)</h3>
      <div class="row mt-2">
        <?php
            $sql = "SELECT * FROM product WHERE type='$type'";
            $result = mysqli_query($conn, $sql);
            $result_check = mysqli_num_rows($result);

            if($result_check > 0){                
                while($row = mysqli_fetch_assoc($result)){  
                    $pic = "./img/A/".$row['pic1']                              
        ?>
        <div class="col-sm-3 col-12 mt-2">
          <div class="card">            
            <img
              src="<?php echo $pic?>"
              class="card-img-top"
            />
            <div class="card-body">                
              <h5 class="card-title"><?php echo $row['name']?></h5>
              <p class="card-text">
                <span>ราคา : </span><?php echo $row['price']?>
              </p>
              <a href="./product.php?id=<?php echo $row['id']?>" class="btn btn-primary">สั่งซื้อ</a>
            </div>
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
