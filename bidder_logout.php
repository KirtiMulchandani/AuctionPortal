<?php

    session_start();

    session_unset();
    session_destroy();

    header("Location: bidder_login_home.php");

?>