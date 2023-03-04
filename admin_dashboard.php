<?php
    include "config.php";
    session_start();
    if(isset($_SESSION['id']) && isset($_SESSION['username'])){
    
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
                <a class="nav-link" href="./property_master_home.php">Property Master</a>
                </li>   
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active" href="./admin_home.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Admin
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="admin_logout.php">Logout</a></li>
                </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="./bidder_registration.php">Bidder</a>
                </li>
            </ul>
            </div>
        </div>
        </nav>

        <!-- <h1>Hello, <?php echo $_SESSION['username']; ?></h1> -->
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $auctioncode = $_POST['auctioncode'];
                $property = $_POST['property'];
                $basevalue = $_POST['basevalue'];
                $startdate = $_POST['startdate'];
                $enddate = $_POST['enddate'];

                mysqli_select_db($conn, 'auctionportal');
                $sql = "INSERT INTO auction(`auctioncode`, `property`, `basevalue`, `startdate`, `enddate`) VALUES ('$auctioncode','$property','$basevalue', '$startdate', '$enddate')";
                $query = mysqli_query($conn, $sql);
                if ($query) {
                    echo "<script> alert('Added Successfully!');
                                     window.location='auction_posted.php';
                           </script>";
                }
                else{
                    echo mysqli_error($conn);;
                }
                    
            }
            
        ?>

        <div class="container mt-4">
            <div class="row">
                <form action = "admin_dashboard.php" method = "post" class="col-sm-11 col-xs-11 col-md-11 mx-auto">
                <h4 class="mb-4">Enter the details of the Auction</h4>
                <hr>
                    <div class="mb-3">
                        <label for="auctioncode" class="form-label">Auction Code</label>
                        <input type="number" class="form-control" id="auctioncode" name="auctioncode">
                    </div>
                    <label for="auctioncode" class="form-label">Property</label>
                    <select class="form-select mb-3" aria-label="Default select example" name="property">
                    <option selected>Select</option>
                        <?php
                        // creating connection with database
                        include "./config.php";
                        // Fetching the available records
                        mysqli_select_db($conn, 'auctionportal');
                        $records = mysqli_query($conn, "SELECT `property_name` From property");
                        while ($data = mysqli_fetch_array($records)) {
                            echo "<option value='" . $data['property_name'] . "'>" . $data['property_name'] . "</option>";
                        }
                        ?>
                    </select>
                    <div class="mb-3">
                        <label for="basevalue" class="form-label">Base Value</label>
                        <input type="number" class="form-control" id="basevalue" name="basevalue">
                    </div>
                    <div class="mb-3">
                        <label for="startdate" class="form-label">Start Date</label>
                        <input type="date" class="form-control" id="startdate" name="startdate">
                    </div>
                    <div class="mb-3">
                        <label for="enddate" class="form-label">End Date</label>
                        <input type="date" class="form-control" id="enddate" name="enddate">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
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
    <?php
}

else{
    header("Location: property_master_home.php");
    exit();
}

?>

