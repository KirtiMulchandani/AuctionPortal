<?php 
    include "config.php";
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Auction Portal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark"> 
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">AutionPortal</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="./property_master_home.php">Property Master</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="./admin_home.php">Admin</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="./bidder_registration.php">Bidder</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    </header>
    <div class="container mt-4">
      <div class="row">
        <form action = "bidder_login.php" method = "post" class="col-sm-11 col-xs-11 col-md-11 mx-auto">
          <h4 class="mb-4">Login as Bidder</h4>
          <hr>
            <?php if(isset($_GET['error'])) 
                  echo "error";
            ?>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="uname" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="pass">
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
      </div>
    </div>
    <div  class="spacer"> . </div>
    <footer>
    <p>Copyright &copy; <script>document.write(new Date().getFullYear());</script>, Auction Portal</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>