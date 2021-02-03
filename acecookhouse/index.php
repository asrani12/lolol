<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- ADDING CSS -->

    <link rel="stylesheet" type="text/css" href="style-ace.css">

    <title>Hello, world!</title>
  </head>
  <body>


<!-- NAVBAR -->

    <nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="ace-logo.jpg" alt="" width="45" height="39" class="d-inline-block align-top" style="border-radius: 50%;">
    </a>
    <a class="navbar-brand" href="#"><u><h4>ACE COOK HOUSE</h4></u></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="#">Menu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact Us</a>
        </li>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search in Menu" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>
      <br>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Quick Access
          </a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Snacks<div class="btn-group dropend">
            <li><a class="dropdown-item" href="#">Main Course</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Bulk order!</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- DIVIDE -->
<div class="row">
  <div class="col-sm-9">
    <br><br><br>
    <div style="background-color: #212529; color: white; margin-left: 10px; margin-right: 10px; border-radius: 25px; padding: 20px;">
      <div class="row">
        
      <div class="col-sm-5">
        <br><br>
        <h5><U><center>A CULINARY EXPERIENCE</center></U></h5>
        
<!-- CAROUSAL -->

        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
          <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
          <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
          <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <center>
          <div class="carousel-item active">
            <img src="ace-carousal (1).jpg" class="d-block w-100" style="max-width: 90%; border-radius: 25px;" alt="IMAGE NOT AVAILABLE">
          </div>
          <div class="carousel-item">
            <img src="ace-carousal (2).jpg" class="d-block w-100" style="max-width: 90%; border-radius: 25px;" alt="IMAGE NOT AVAILABLE">
          </div>
          <div class="carousel-item">
            <img src="ace-carousal (3).jpg" class="d-block w-100" style="max-width: 90%; border-radius: 25px;" alt="IMAGE NOT AVAILABLE">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </a>
          </center>
      </div>
    </div>



<!-- MENU CARD -->

      <div class="col-sm-6 container">
        <br><br>
          <caption><center><h5>MENU</h5></center></caption>
        <table class="table" style="color: white;">
          <thead>
            <tr>
              <th>Order no.</th>
              <th colspan="2">Name</th>
              <th>Price</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th>101</th>
              <td colspan="2">Mutton Galouti kabab</td>
              <td>300Rs.</td>
            </tr>
            <tr>
              <th>102</th>
              <td colspan="2">Mutton Shammi kabab</td>
              <td>350Rs.</td>
            </tr>
            <tr>
              <th>103</th>
              <td colspan="2">Chicken Galouti kabab</td>
              <td>350Rs.</td>
            </tr>
            <tr>
              <th>103</th>
              <td colspan="2">Chicken Galouti kabab</td>
              <td>350Rs.</td>
            </tr>
            <tr>
              <th>103</th>
              <td colspan="2">Chicken Galouti kabab</td>
              <td>350Rs.</td>
          </tbody>
        </table>
      </div>
      </div>
    </div>
  </div>







  <div class="col-sm-3" style="background-color: #212529; padding-bottom: 200px; color: white; border: 2px white; margin-top: 10px;">
    <br>
    <CENTER><U><H5>CART</H5></U></CENTER>
    <br>  
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </div>
</div>










    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>
