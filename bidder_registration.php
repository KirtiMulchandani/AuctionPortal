<?php 
    include "config.php";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $name = $_POST['name'];
      $address = $_POST['address'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $states = $_POST['states'];
      $district = $_POST['district'];

      mysqli_select_db($conn, 'auctionportal');
      $sql = "INSERT INTO bidder(`name`, `address`, `username`, `password`, `states`, `district`) VALUES ('$name','$address','$email', '$password', '$states', '$district')";
      $query = mysqli_query($conn, $sql);
      if ($query) {
          echo "<script> alert('Registered Successfully!');
                           window.location='bidder_login_home.php';
                 </script>";
      }
      else{
          echo mysqli_error($conn);;
      }
          
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Auction Portal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="cities.js"></script>
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
    <main>
    <div class="container mt-4">
      <div class="row">
        <form action = "bidder_registration.php" method = "post" class="col-sm-11 col-xs-11 col-md-11 mx-auto">
          <h4 class="mb-4">Register As Bidder</h4>
          <hr>
            <!-- <?php if(isset($_GET['error'])) 
                  echo "error";
            ?> -->

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" name="address">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
                    <div class="mb-3">
                        <label for="state" class="mb-3">State</label>
                        <select onchange="print_city('state', this.selectedIndex);" id="sts" name="states" class="form-control" required class="mb-3">
                        </select>
                            <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>   
                        <div class="mt-3 mb-3">
                        <label for="district" class="mb-3">District</label>
                            <select id="state" class="form-control mb-3" name="district" required></select>
                            <script language="javascript">
                                print_state("sts");
                            </script>
                            <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                        </div>
                    </div>
            <button type="submit" class="btn btn-primary">Register</button>
            <span class="my-4">Already have an account? <a href="bidder_login_home.php
            ">Login here!</a></span>
        </form>
      </div>
    </div>
    </main>
    <div  class="spacer"> . </div>
    <footer>
    <p>Copyright &copy; <script>document.write(new Date().getFullYear());</script>, Auction Portal</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>