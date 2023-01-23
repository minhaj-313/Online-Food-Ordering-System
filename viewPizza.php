<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <title id=title>Pizza</title>
    <link rel="icon" href="img/logo.jpg" type="image/x-icon">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <style>
        #cont {
            min-height: 578px;
        }
    </style>
</head>

<body>
    <?php include 'partials/_dbconnect.php'; ?>
    <?php require 'partials/_nav.php' ?>

    <div class="container my-4" id="cont">
        <div class="row jumbotron text-light" style="background-color: black;">
            <?php
            $pizzaId = $_GET['pizzaid'];
            $sql = "SELECT * FROM `pizza` WHERE pizzaId = $pizzaId";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            $pizzaName = $row['pizzaName'];
            $pizzaPrice = $row['pizzaPrice'];
            $pizzaDesc = $row['pizzaDesc'];
            $pizzaCategorieId = $row['pizzaCategorieId'];
            ?>
            <script>
                document.getElementById("title").innerHTML = "<?php echo $pizzaName; ?>";
            </script>
            <?php
            echo  '<div class="col-md-4">
                <img src="img/pizza-' . $pizzaId . '.jpg" width="249px" height="262px" style="border-radius:12px; box-shadow: 0.5px 0.5px 6px 4px #FFC107;">
            </div>
            <div class="col-md-8 my-4">
                <h3>' . $pizzaName . '</h3>
                <h5 style="color: #ff0000">Rs. ' . $pizzaPrice . '/-</h5>
                <p class="mb-4">' . $pizzaDesc . '</p>';

            if ($loggedin) {
                $quaSql = "SELECT `itemQuantity` FROM `viewcart` WHERE pizzaId = '$pizzaId' AND `userId`='$userId'";
                $quaresult = mysqli_query($conn, $quaSql);
                $quaExistRows = mysqli_num_rows($quaresult);
                if ($quaExistRows == 0) {
                    echo '<form action="partials/_manageCart.php" method="POST">
                              <input type="hidden" name="itemId" value="' . $pizzaId . '">
                              <button type="submit" name="addToCart" class="btn custom-btn btn-4">Add to Cart</button>';
                } else {
                    echo '<a href="viewCart.php"><button class="btn custom-btn btn-1">Go to Cart</button></a>';
                }
            } else {
                echo '<button class="btn custom-btn btn-4" data-toggle="modal" data-target="#loginModal">Add to Cart</button>';
            }
            echo '</form>
                <h6 class="my-3"> View </h6>
                <div class="mx-4">
                    <a href="viewPizzaList.php?catid=' . $pizzaCategorieId . '" class="active text-warning">
                    <i class="fas fa-qrcode text-warning"></i>
                        <span>All Pizza</span>
                    </a>
                </div>
                <div class="mx-4">
                    <a href="index.php" class="active text-warning">
                    <i class="fas fa-qrcode text-warning"></i>
                        <span>All Category</span>
                    </a>
                </div>
            </div>'
            ?>
        </div>
    </div>

    <?php require 'partials/_footer.php' ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-show-password@1.2.1/dist/bootstrap-show-password.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
    <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/counterup/counterup.min.js"></script>


    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
</body>

</html>