<?php
    session_start();
    include "config.php";

    function validate($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if(isset($_POST['uname']) && isset($_POST['pass'])){


        $uname = validate($_POST['uname']);
        $pass = validate($_POST['pass']);
    
        if(empty($uname))
            header("Location: bidder_login_home.php?erro=username is required");
    
        else if(empty($pass))
            header("Location: bidder_login_home.php?erro=Password is required");
        
        mysqli_select_db($conn, 'auctionportal');
    
        $sql = "SELECT * FROM bidder WHERE username='$uname' AND `password`='$pass'";
    
        $result = mysqli_query($conn, $sql);
        
        if(!$result) {
            die(mysqli_error($conn));
        }
        
    
        if(mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_assoc($result);
            if($row['username'] == $uname && $row['password'] == $pass){
                echo "Logged In!";
                $_SESSION['username'] = $row['username'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];
                header("Location: bidder_dashboard.php");
                exit();
            }
            else{
                header("Location: bidder_login_home.php?erro=Incorrect Username or Password");
            }
        }
    }


    else{
        header("Location: bidder_login_home.php");
        exit();
    }


?>