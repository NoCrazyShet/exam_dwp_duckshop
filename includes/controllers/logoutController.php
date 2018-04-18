<?php
require_once("../permanents/functions.php");
    session_start();
    $_SESSION = array();
    if(isset($_COOKIE[session_name()])) {
        setcookie(session_name(), '', time()-42000, '/');
    }
    session_destroy();
    redirect_to("../../mordor/blackGatePage.php?loginStatus=logout");