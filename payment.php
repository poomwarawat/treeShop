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
            <h3>ชำระเงิน</h3>
          </div>
        </div>
      </div>
    </div>

    <div
      class="container p-4"
      style="
        margin-top: 50px;
        border: 1px solid #e2ecf0;
        color: #707070;
        border-radius: 5px;
      "
    >
      <div class="text-center pt-4">
        <h3>Payment notification</h3>
        <div style="height: 1px; width: 100%; background-color: #e2ecf0;"></div>
        <div class="pt-4">
          <img src="img/payment.png" class="w-25" alt="" />
        </div>
        <div class="pt-4" style="text-align: left; width: 70%; margin: auto;">
          <form action="" method="POST">
            <div class="row">
              <div class="col-sm-8 col-12">
                <p>Username</p>
                <input
                  id="username"
                  name="username"
                  class="form-control"
                  placeholder="Enter your username order"
                />
              </div>
              <div class="col-sm-4 col-12">
                <br />
                <button type="submit" class="btn btn-primary w-100 mt-3">
                  Search
                </button>
              </div>
            </div>
          </form>
          <form method="POST">
            <p class="mt-2">Order ID</p>
            <select class="form-control" name="" id="">
              <option value=""
                >---------- กรุณาเลือกรายการสินค้า ----------</option
              >
            </select>
            <div>
              <div class="row pt-4">
                <div class="col-7">
                  <p>Payment via bank</p>
                </div>
                <div class="col-5">
                  <p>Payment via Channel</p>
                </div>
              </div>
              <div class="row pt-2">
                <div class="col-7">
                  <input
                    disabled
                    placeholder="Krungthai bank"
                    class="form-control"
                    type="text"
                  />
                </div>
                <div class="col-5">
                  <input
                    disabled
                    placeholder="Internet Banking"
                    class="form-control"
                    type="text"
                    name=""
                    id=""
                  />
                </div>
              </div>
            </div>
            <div>
              <div class="row pt-4">
                <div class="col-7">
                  <p>Total price</p>
                </div>
                <div class="col-5">
                  <p>Date</p>
                </div>
              </div>
              <div class="row pt-2">
                <div class="col-7">
                  <input
                    disabled
                    placeholder="4,928.00 THB"
                    class="form-control"
                    type="text"
                  />
                </div>
                <div class="col-5">
                  <input
                    disabled
                    placeholder="22/04/42"
                    class="form-control"
                    type="text"
                    name=""
                    id=""
                  />
                </div>
              </div>
            </div>
            <div class="pt-4">
              <p>Upload file</p>
              <div class="form-group">
                <input
                  disabled
                  type="file"
                  class="form-control-file"
                  id="exampleInputFile"
                  aria-describedby="fileHelp"
                />
                <small
                  id="fileHelp"
                  style="color: red;"
                  class="form-text text-muted"
                  >* File size is less than 1 MB .jpg and .png file types
                  only.</small
                >
              </div>
              <div>
                <p>Name</p>
                <input
                  type="text"
                  id="name"
                  name="name"
                  class="form-control"
                  placeholder="Enter your phone name"
                  disabled
                />
              </div>
              <div class="mt-3">
                <p>Phone Number</p>
                <input
                  type="text"
                  id="phone"
                  name="phone"
                  class="form-control"
                  placeholder="Enter your phone number"
                  disabled
                />
              </div>
              <p>Location</p>
              <div class="form-group">
                <textarea
                  disabled
                  class="form-control"
                  rows="5"
                  id="comment"
                ></textarea>
              </div>
              <div class="mt-2">
                <button
                  type="submit"
                  disabled
                  id="checkout_btn"
                  class="btn btn-primary w-100"
                >
                  Check Out
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
