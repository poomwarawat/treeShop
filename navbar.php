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
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="./index.php">
            <img src="./img/logo.jpg" width="50px" height="50px">
            Happy Tree Friends
        </a>
        <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown"
        aria-expanded="false"
        aria-label="Toggle navigation"
        >
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
            <a class="nav-link" href="./index.php"
                >Home <span class="sr-only">(current)</span></a
            >
            </li>
            <li class="nav-item">
            <a class="nav-link" href="./category.php?type=A">Category</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="./payment.php">Payments</a>
            </li>    
            <li class="nav-item">
            <a class="nav-link" href="./status.php">Status</a>
            </li>          
        </ul>
        <form action="./cart.php" class="form-inline my-2 my-lg-0">
            <button type="submit" class="cart-btn">
                <img src="./img/cart.png" width="50px" height="50px">
            </button>
        </form>
        </div>
    </nav>
</body>
</html>