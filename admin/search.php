<!DOCTYPE html>
<html>
<head>
	<title>Bootstrap Example</title>
<link rel="stylesheet" href="Style.css">
<LINK REL="SHORTCUT ICON"  HREF="../image/ADT.png">
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
  <div class="container">
    <img src="../image/ADT.png" style="height: 20px">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
	  </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                  <a class="nav-link" href="../index.php"> Home <span class="glyphicon glyphicon-home sr-only">(current)</span></a>
              </li>
              <li class="nav-item dropdown">
                  <a class="nav-link" href="#" id="navbarDropdown">
                      Song
                  </a>
                  <div class="dropdown-content">
                      <a class="dropdown-item" href="./admin/addsong.php">Add</a>
                      <a class="dropdown-item" href="./admin/editsong.php">Edit</a>
                      
                      
                  </div>
              </li>
              <li class="nav-item dropdown">
                  <a class="nav-link" href="#" id="navbarDropdown">
                      Song details
                  </a>
                  <div class="dropdown-content">
                      <a class="dropdown-item" href="./admin/listsong.php">List</a>
                      <a class="dropdown-item" href="./admin/details.php"></a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                  </div>
              </li>
          </ul>

          
          <form class="form-inline my-2 my-lg-0" action="./admin/search.php" method="GET">
<input class="form-control mr-sm-2" type="search" placeholder="Search for song" style="width: 400px" name="Search">
<input type="submit"name="search" value="Search" style="height: 37px " />
</form>
          
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
    <h2 class="list-product-title">Search product</h2>
    <div class="list-product-subtitle">
      <p>Products</p>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h1></h1>
          <?php $connect = mysqli_connect('localhost','root','','php'); ?>
<div class="container-fluid">

  <div class="row content-main justify-content-center" id="result">
      

    <div class=" col col-8 content-song" >  
      <div class="row">
        <div class="col">
          <h3>Search results</h3> 
        </div>
      </div>
      <?php 
            include("connect.php");
           if(isset($_GET['inputSearch'])){ 
         echo "<script>alert('ok)</script>";
         $Search="";
          $Search =$_GET['inputSearch'];
         $result= mysqli_query($conn,"select * from song where song.productname like '%{$Search}%'");
         $row=mysqli_fetch_array($result);
         $ida=$row['ProductID'];
         $Image=$row['Image'];
         $SongName=$row['ProductName'];
         ;
         echo "<div class='card border-success mb-3 style=' max-width: 33%;'>
         <div class='card-header bg-transparent boder-success'>$SongName</div>
         <div class='card-body text-success'>
         <img src='../image/$Image' alt='' style='height: 10rem;width:30%'>
         </div>
         <div class='card-footer bg-transparent border-success'>
           <a class='btn btn-primary' href='cart.php?id=$ida'>Add to cart</a>
         
         </div>";
       }
           
        
    
          ?>
</body>
</html>