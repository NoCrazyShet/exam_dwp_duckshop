<?php   require_once("includes/session.php");
        require_once("includes/connection.php");
        require_once("includes/functions.php");
        confirm_logged_in();
?>
    <html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-15"/>
        <link rel="stylesheet" type="text/css" href="../main.css">
    </head>
    <body>
    <header>
        <nav>
            <div class="nav-wrapper">
                <a href="#" class="brand-logo">Logo</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="#">Company Information</a></li>
                    <li><a href="#">Products</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <h1 align="center">Welcome to the backend</h1>

        <form action="includes/logoutController.php" method="get">
            <input type="submit" value="Click here to log out!" class="waves-effect waves-light btn-large">
        </form>


    </body>
    </html>