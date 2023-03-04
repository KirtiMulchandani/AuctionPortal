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
                <a class="nav-link active" href="./property_master_home.php">Property Master</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" href="./admin_home.php">Admin</a>
                </li>
                
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active" href="./bidder_registration.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Bidder
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="bidder_profile.php">Edit Profile</a></li>
                    <li><a class="dropdown-item" href="bidder_logout.php">Logout</a></li>
                </ul>
                </li>
            </ul>
            </div>
        </div>
        </nav>


        <div class="container mt-4">
        <?php
            include "./config.php";
            $username = $_SESSION['username'];
            mysqli_select_db($conn, 'auctionportal');
            $sql = "SELECT `name` FROM `bidder` WHERE username = '$username'";

            $res = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($res);
            $name = $row['name'];

        ?>
            <h5>Hello! <?php echo $name; ?></h5>
            <hr>
        <?php
            include "./config.php";
            // creating connection with database
            mysqli_select_db($conn, 'auctionportal');
            $sql = "SELECT district, states FROM `bidder` WHERE name = '$name'";


            $result = mysqli_query($conn, $sql);

            echo "<h6>"."Your Property Preferences Are: "."</h6>";
            echo "<table class='table table-hover table-dark table-responsive{-sm|-md|-lg|-xl|-xxl}'>";
            echo "<thead>";
            echo "<tr>";
            echo "<th scope='col'>Districts</th>";
            echo "<th scope='col'>States</th>";
            echo "<th scope='col'>Edit</th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
            $i = 1;
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['district'] . "</td>";
                echo "<td>" . $row['states'] . "</td>";
                echo "<td>" . "<a href = 'edit.php' type='button' class='btn btn-primary'>Edit</a>" . "</td>"; 
                echo "</tr>";
                $i += 1;
            }
            echo "</table>";
            ?>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <div  class="spacer"> . </div>
    <footer>
    <p>Copyright &copy; <script>document.write(new Date().getFullYear());</script>, Auction Portal</p>
    </footer>
    </body>
    </html>
    <?php
}

else{
    header("Location: bidder_login_home.php");
    exit();
}
?>

