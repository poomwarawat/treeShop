<!DOCTYPE html>
<html lang="en">
    <?php
        session_start();
        $_SESSION['username'] = "poomwarawat";
        $_SESSION['test'] = [1,2,3,4,5];
    ?>
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
    <!-- picture slide -->
    <div
      id="carouselExampleIndicators"
      class="carousel slide"
      data-ride="carousel"
    >
      <ol class="carousel-indicators">
        <li
          data-target="#carouselExampleIndicators"
          data-slide-to="0"
          class="active"
        ></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active image-box">
          <img
            src="https://cdn.pixabay.com/photo/2017/04/24/09/36/background-2255917_1280.jpg"
            class="d-block w-100 slide-image"
            alt="..."
          />
          <div class="centered">
            <h1>Welcome</h1>
            <p>ยินดีต้อนรับ</p>
          </div>
          <div class="bottom-centered">
            <p>we care a tree and a tree will care you.</p>
          </div>
        </div>
        <div class="carousel-item image-box">
          <img
            src="https://cdn.pixabay.com/photo/2017/01/20/11/50/landscape-1994685_1280.jpg"
            class="d-block w-100 slide-image image-box"
            alt="..."
          />
          <div class="centered">
            <p>"ต้นไม้โตขึ้นจากยอด ไม่ใช่จากโคนแบบที่หลายคนเชื่อกัน"</p>
          </div>
        </div>
        <div class="carousel-item image-box">
          <img
            src="https://cdn.pixabay.com/photo/2018/05/16/22/44/bears-garlic-3407276_1280.jpg"
            class="d-block w-100 slide-image image-box"
            alt="..."
          />
          <div class="centered">            
            <p>ต้นไม้ 1 ต้น สามารถผลิตออกซิเจนได้ 118 กิโลกรัมต่อปี ซึ่งเพียงพอสำหรับคน 2 คนใช้ได้ทั้งปี</p>
          </div>
        </div>
      </div>
      <a
        class="carousel-control-prev"
        href="#carouselExampleIndicators"
        role="button"
        data-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a
        class="carousel-control-next"
        href="#carouselExampleIndicators"
        role="button"
        data-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <!-- footer -->    
    <div class="footer-home">
      <div class="contact-text">
        <h3>Contact</h3>
      </div>
      <div>
        <img
          src="https://1000logos.net/wp-content/uploads/2016/11/Facebook-Logo.png"
          width="40px"
          height="40px"
        />
        <span>facebook</span>
      </div>
      <div>
        <img
          src="https://brasol.vn/public/uploads/1521189589-brasol.vn-logo-instargram-logo-instagram-vector.png"
          width="40px"
          height="40px"
        />
        <span>Instagram</span>
      </div>
      <div>
        <img
          src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/41/LINE_logo.svg/600px-LINE_logo.svg.png"
          width="40px"
          height="40px"
        />
        <span>Line</span>
      </div>
    </div>
  </body>
</html>
