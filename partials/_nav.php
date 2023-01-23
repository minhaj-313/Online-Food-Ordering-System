<?php 
session_start();
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
  $loggedin= true;
  $userId = $_SESSION['userId'];
  $username = $_SESSION['username'];
}
else{
  $loggedin = false;
  $userId = 0;
}

$sql = "SELECT * FROM `sitedetail`";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

$systemName = $row['systemName'];

echo '<nav class="navbar navbar-expand-lg bg-warning">
  <a href="index.php"><img src="img/logo.png" alt=logo"" style="heght:100px; width: 150px;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active ">
            <a class="nav-link fw-bold navbar-textt nav-link-ltr" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown ">
            <a class="nav-link fw-bold dropdown-toggle navbar-textt nav-link-ltr" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Top Categories
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">';
$sql = "SELECT categorieName, categorieId FROM `categories`";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
  echo '<a class="dropdown-item" href="viewPizzaList.php?catid=' . $row['categorieId'] . '">' . $row['categorieName'] . '</a>';
}
echo '</div>
          </li>
          <li class="nav-item ">
            <a class="nav-link fw-bold navbar-textt nav-link-ltr" href="viewOrder.php">Your Orders</a>
          </li>

         <!-- <li class="nav-item">
            <a class="nav-link fw-bold" href="about.php">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-bold" href="contact.php">Contact Us</a>
          </li> -->
          
        </ul>
        <form method="get" action="/OnlinePizzaDelivery/search.php" class="form-inline my-2 my-lg-2 mx-4 ">
          <input class="form-control search-f" type="search" name="search" id="search" placeholder="Search Your Favorite Dishes" aria-label="Search" required>
          <button class="btn svg-search" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
          <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
        </svg></button>
        </form>';

$countsql = "SELECT SUM(`itemQuantity`) FROM `viewcart` WHERE `userId`=$userId";
$countresult = mysqli_query($conn, $countsql);
$countrow = mysqli_fetch_assoc($countresult);
$count = $countrow['SUM(`itemQuantity`)'];
if (!$count) {
  $count = 0;
}
echo '<a href="viewCart.php"><button type="button" class="btn custom-btn4 btn-4" title="MyCart">
          <svg xmlns="img/cart.svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
          </svg>  
          <i class="bi bi-cart">Cart(' . $count . ')</i>
        </button></a>';

if ($loggedin) {
  echo '<ul class="navbar-nav mr-2">
            <li class="nav-item dropdown">
              <a class="nav-link fw-bold dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"> Welcome ' . $username . '</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="partials/_logout.php">Logout</a>
              </div>
            </li>
          </ul>
          <div class="text-center image-size-small position-relative">
            <a href="viewProfile.php"><img src="img/person-' . $userId . '.jpg" class="rounded-circle" onError="this.src = \'img/profilePic.jpg\'" style="width:40px; height:40px"></a>
          </div>';
} else {
  echo '
          <button type="button" class="btn custom-btnn btn-3"  data-toggle="modal" data-target="#loginModal">Login</button>
          <button type="button" class="btn custom-btnn btn-3"  data-toggle="modal" data-target="#signupModal">SignUp</button>';
}

echo '</div>
    </nav>';

    include 'partials/_loginModal.php';
    include 'partials/_signupModal.php';

    if(isset($_GET['signupsuccess']) && $_GET['signupsuccess']=="true") {
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>Success!</strong> You can now login.
              <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span></button>
            </div>';
    }
    if(isset($_GET['error']) && $_GET['signupsuccess']=="false") {
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong>Warning!</strong> ' .$_GET['error']. '
              <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span></button>
            </div>';
    }
    if(isset($_GET['loginsuccess']) && $_GET['loginsuccess']=="true"){
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>Success!</strong> You are logged in
              <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span></button>
            </div>';
    }
    if(isset($_GET['loginsuccess']) && $_GET['loginsuccess']=="false"){
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong>Warning!</strong> Invalid Credentials
              <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span></button>
            </div>';
    }
