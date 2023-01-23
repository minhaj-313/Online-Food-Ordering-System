<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <title>Home</title>


    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <link rel="icon" href="img/logo.jpg" type="image/x-icon">
    <style>
        #cont {
            min-height: 515px;
        }
    </style>
</head>

<body>
    <?php include 'partials/_dbconnect.php'; ?>
    <?php require 'partials/_nav.php' ?>

    <div class="container my-3">
        <h2 class="py-2">Search Result for <em>"<?php echo $_GET['search'] ?>"</em> :</h2>
        <h3><span id="cat" class="py-2"></span></h3>
        <div class="row">
            <?php
            $noResult = true;
            $query = $_GET["search"];
            $sql = "SELECT * FROM `categories` WHERE MATCH(categorieName, categorieDesc) against('$query')";

            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
            ?><script>
                    document.getElementById("cat").innerHTML = "Category: ";
                </script> <?php
                            $noResult = false;
                            $catId = $row['categorieId'];
                            $catname = $row['categorieName'];
                            $catdesc = $row['categorieDesc'];

                            echo '<div class="col-xs-3 col-sm-3 col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img src="img/card-' . $catId . '.jpg" class="card-img-top" alt="image for this pizza" width="249px" height="270px">
                        <div class="card-body">
                            <h5 class="card-title"><a href="viewPizzaList.php?catid=' . $catId . '">' . $catname . '</a></h5>
                            <p class="card-text">' . substr($catdesc, 0, 29) . '...</p>
                            <a href="viewPizzaList.php?catid=' . $catId . '" class="btn custom-btn btn-1">View All</a>
                        </div>
                    </div>
                </div>';
                        }
                            ?>
        </div>
    </div>

    <div class="container my-3" id="cont">
        <h3><span id="iteam" class="py-2"></span></h3>
        <div class="row">
            <?php
            $query = $_GET["search"];
            $sql = "SELECT * FROM `pizza` WHERE MATCH(pizzaName, pizzaDesc) against('$query')";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
            ?><script>
                    document.getElementById("iteam").innerHTML = "Items: ";
                </script> <?php
                            $noResult = false;
                            $pizzaId = $row['pizzaId'];
                            $pizzaName = $row['pizzaName'];
                            $pizzaPrice = $row['pizzaPrice'];
                            $pizzaDesc = $row['pizzaDesc'];
                            $pizzaCategorieId = $row['pizzaCategorieId'];

                            echo '<div class="col-xs-3 col-sm-4 col-md-4">
                        <div class="card" style="width: 18rem;  margin: 20px; box-shadow: 0.5px 0.5px 6px 4px #FFC107; border-radius: 10px;
                        border-radius: 10px">
                            <img src="img/pizza-' . $pizzaId . '.jpg" class="card-img-top" alt="image for this pizza" width="249px" height="249px" style="border-radius: 10px">
                            <div class="card-body">
                                <h5 class="card-title">' . substr($pizzaName, 0, 20) . '...</h5>
                                <h6 style="color: #ff0000">Rs. ' . $pizzaPrice . '/-</h6>
                                <p class="card-text">' . substr($pizzaDesc, 0, 25) . '...</p>   
                                <div class="row justify-content-center">';
                            if ($loggedin) {
                                $quaSql = "SELECT `itemQuantity` FROM `viewcart` WHERE pizzaId = '$pizzaId' AND `userId`='$userId'";
                                $quaresult = mysqli_query($conn, $quaSql);
                                $quaExistRows = mysqli_num_rows($quaresult);
                                if ($quaExistRows == 0) {
                                    echo '<form action="partials/_manageCart.php" method="POST">
                                                              <input type="hidden" name="itemId" value="' . $pizzaId . '">
                                                              <button type="submit" name="addToCart" class="btn custom-btn btn-4" style="margin:5px;">Add to Cart</button> ';
                                } else {
                                    echo '<a href="viewCart.php"><button class="btn custom-btn btn-2" style="margin:5px;">Go to Cart</button></a>';
                                }
                            } else {
                                echo '<button class="btn custom-btn btn-4" data-toggle="modal" data-target="#loginModal" style="margin:5px;">Add to Cart</button>';
                            }
                            echo '</form>                            
                                                <a href="viewPizza.php?pizzaid=' . $pizzaId . '" class="mx-2"><button class="btn custom-btn btn-1" style="margin:5px;">Quick View</button></a> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>';
                        }
                        if ($noResult) {
                            echo '<div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <h1>Your search - <em>"' . $_GET['search'] . '"</em> - No Result Found.</h1>
                        <p class="lead"> Suggestions: <ul>
                            <li>Make sure that all words are spelled correctly.</li>
                            <li>Try different keywords.</li>
                            <li>Try more general keywords.</li></ul>
                        </p>
                    </div>
                </div> ';
                        }
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
</body>

</html>