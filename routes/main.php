<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DeCafe - Aplikasi Pesanan Makanan dan Minuman Cafe</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" 
     rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  </head>

  <body style="height: 3000px">
    <!---Header--> 
  <nav class="navbar navbar-expand navbar-dark bg-primary sticky-top">
  <div class="container-lg">
    <a class="navbar-brand" href="."><i class="bi bi-cup-hot"></i> DeCafe</a>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Username
          </a>
          <ul class="dropdown-menu dropdown-menu-end-mt-2">
            <li><a class="dropdown-item" href="#"><i class="bi bi-person-square"></i> Profile</a></li>
            <li><a class="dropdown-item" href="#"><i class="bi bi-gear"></i> Setting</a></li>
            <li><a class="dropdown-item" href="#"><i class="bi bi-box-arrow-left"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <!--End Header-->
<div class="container-lg">
  <div class="row">
    <!---sidebar-->
     
      <div class="col-lg-3">
      <nav class="navbar navbar-expand-lg bg-light rounded border mt-2">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" style="width:250px">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav nav-pills flex-column justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link ps-2 <?php echo ((isset( $_GET["x"]) && $_GET["x"]=='home') || !isset( $_GET["x"])) ? 'active link-light' : 'link-dark' ;?>"
              aria-current="page" href="home"><i class="bi bi-house-door"></i> Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link ps-2 <?php echo (isset( $_GET["x"]) && $_GET["x"]=='order') ? 'active link-light' : 'link-dark' ;?>" 
              href="order"><i class="bi bi-cart4"></i> Order</a>
            </li>
            <li class="nav-item">
              <a class="nav-link ps-2 <?php echo (isset( $_GET["x"]) && $_GET["x"]=='customer') ? 'active link-light' : 'link-dark' ;?>" 
              href="customer"><i class="bi bi-person-fill"></i> Customer</a>
            </li>
            <li class="nav-item">
              <a class="nav-link ps-2 <?php echo (isset( $_GET["x"]) && $_GET["x"]=='product') ? 'active link-light' : 'link-dark' ;?>" 
              href="product"><i class="bi bi-card-checklist"></i> Product</a>
            </li>
            <li class="nav-item">
              <a class="nav-link ps-2 <?php echo (isset( $_GET["x"]) && $_GET["x"]=='report') ? 'active link-light' : 'link-dark' ;?>" 
              href="report"><i class="bi bi-file-earmark-bar-graph"></i> Report</a>
            </li>
          </ul>
          
        </div>
      </div>
    </div>
  </nav>
      </div>

    <!---End Sidebar --->

    <!---Content--> 
     
    <!---End Content--->
  </div>

  <div class="fixed-bottom text-center mb-2">
    copyyright 2022 Markaz Virtual
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>