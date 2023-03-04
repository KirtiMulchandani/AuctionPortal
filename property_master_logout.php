<?php

    session_start();

    session_unset();
    session_destroy();

    header("Location: property_master_home.php");

?>