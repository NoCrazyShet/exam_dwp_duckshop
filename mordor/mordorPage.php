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
            <div class="container">
                <div class="nav-wrapper">
                    <a href="#" class="brand-logo">Logo</a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <li><a href="mordorPage.php?page=compInfo">Company Information</a></li>
                        <li><a href="mordorPage.php?page=products">Products</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="container">
        <h1 align="center">Welcome to the backend</h1>
            <?php
            $allowed = array('compInfo', 'products');
            $page = ( isset($_GET['page']) ) ? $_GET['page'] : 'mordorPage';
            if ( in_array($page, $allowed) ) {
            include("./$page.php");
            }
            ?>




            <form action="includes/logoutController.php" method="get">
                <input type="submit" value="Click here to log out!" class="waves-effect waves-light btn-large">
            </form>
    </div>
    </body>
    </html>