<!DOCTYPE html>
<html>
<head>
	<title>ADT</title>
  <LINK REL="SHORTCUT ICON"  HREF="image/ADT.png">
<link rel="stylesheet" href="Style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>

</style>

<body>
	<!-- menu -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container" >
    <img src="./image/ADT.png" style="height: 20px">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
	  </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                  <a class="nav-link" href="#"> Home <span class="glyphicon glyphicon-home sr-only">(current)</span></a>
              </li>
              <li class="nav-item dropdown">
                  <a class="nav-link" href="#" id="navbarDropdown">
                      Toy
                  </a>
                  <div class="dropdown-content">
                      <a class="dropdown-item" href="./admin/addsong.php">Add</a>
                      <a class="dropdown-item" href="./admin/editsong.php">Edit</a>
                  </div>
                  

              </li>
              <li class="nav-item dropdown">
                  <a class="nav-link" href="#" id="navbarDropdown">
                      Details
                  </a>
                  <div class="dropdown-content">
                      <a class="dropdown-item" href="./admin/listsong.php">List</a>
                      
                  </div>
              </li>
              
          </ul>

          
          <form class="form-inline my-2 my-lg-0" action="./admin/search.php" method="GET">
<input class="form-control mr-sm-2" type="search" name="inputSearch" placeholder="Search for song" style="width: 400px" >
<input type="submit"name="search" value="Search"  style="height: 37px " />
</form>
<li class="nav-item dropdown">
                  <a class="nav-link" href="#" id="navbarDropdown">
                      Login
                  </a>
                  <div class="dropdown-content">
                      <a class="dropdown-item" href="./login2.php">Login</a>
                      <a class="dropdown-item" href="./resgister1.php">Resgister</a>
                      
                  </div>
              </li>
          
      </div>
  </div>
</nav>
<!-- end menu -->
<!-- slide -->
<div id="carouselExampleIndicators" class="carousel slide mt-1" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img style="-webkit-user-select: none;margin: auto;cursor: zoom-in;background-color: hsl(0, 0%, 90%);transition: background-color 300ms;" src="https://cdn.tgdd.vn/Files/2020/10/20/1300458/genshin-impact-thumb_800x450.jpg" width="1550" height="450" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://cf.shopee.vn/file/0941129c8c137888bf97eecbce393c12" width="1550" height="450" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img style="-webkit-user-select: none;margin: auto;cursor: zoom-in;background-color: hsl(0, 0%, 90%);transition: background-color 300ms;" class="d-block w-100" src="https://cf.shopee.vn/file/03b85e372078f3625ddda6627e07bcb3" width="1550" height="450" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- end slide -->
<!-- list product -->
<div class="container">
  <div class="row mt-5">
    <h2 class="list-product-title">Toy</h2>
    <div class="list-product-subtitle">
      <p>New toys</p>
    </div>

<?php
  $connect = mysqli_connect('localhost','root','','php');
    if (!$connect){
      echo "kết nối thất bại";
    }else{
      echo "";
    }
    $sql ="select * from song";
      $query=mysqli_query($connect,"select * from song");
      while($row_pro=mysqli_fetch_array($query)){
      $ProductID  = $row_pro['ProductID'];
      $ProductName = $row_pro['ProductName'];
      $Price = $row_pro['Price'];
      $OriGin = $row_pro['OriGin'];
      $Image = $row_pro['Image'];
      $GenreID   = $row_pro['GenreID'];
      echo"
      <div class='col-md-3 col-sm-6 col-12'>
      <div class='card card-product mb-3'>
      <div id='song'>
      <h1>$ProductName</h1>
      <img src='image/$Image' width='250' height='250' />
      <p><b>Price: $Price </b></p>
      <p><b>Singer: $OriGin</b></p>
      <a href='./admin/cart.php?id=$ProductID&&sl=1'>Add to cart</a>
      </div>
      </div>
      </div>
      ";
    }
      ?>
      <?php
if (isset($_GET["add_cart"])) { 
    $productID =  intval($_GET['add_cart']);
    if (isset($_SESSION['Username']) && $_SESSION['Username'] != null){
        $UserName = $_SESSION['Username'];
        $UserID = $_SESSION['UserID'];
        $sql4="select * from order where UserID=$UserID AND OrderID =$OrderID ";
        $result4 = mysqli_query($connect, $sql4);
        $check_pro = mysqli_num_rows($result4);
        if ($check_pro > 0) {
            echo "<script>alert('Products already in the cart')</script>";
            echo "<script>window.open('index.php','_self')</script>";
        }
        else {
            $sql = " insert into cart values ('', $UserID, $OrderID) ";
            $result = mysqli_query($connect, $sql); 
            if ($result) {
                echo "<script>alert('Product added to the cart successfully!')</script>";
                echo "<script>window.open('index.php','_self')</script>";
            }
            else {
                echo "<script>alert('Error')</script>";
                echo "<script>window.open('index.php','_self')</script>";
            }
        }
    }
    else {
        echo "<script>alert('You need to be loged in to perform this action')</script>";
    }
    }       
    
?>


      <div id="product_box">
      <div id="single_product"></div>

      </div>
      </div>

    </div>
    </div>


  
</body>
</html>
