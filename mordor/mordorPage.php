<?php   require_once("../includes/permanents/session.php");
        require_once("../includes/permanents/connection.php");
        require_once("../includes/permanents/functions.php");
        confirm_logged_in();
?>

    <html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-15"/>
        <link rel="stylesheet" type="text/css" href="../main.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
            <?php include("../includes/controllers/mordorController.php") ?>

            <form action="../includes/controllers/logoutController.php" method="get">
                <button type="submit" class="waves-effect waves-light btn-large">Log Out</button>
            </form>

    </div>
    <script src="../materialize/js/bin/materialize.min.js"></script>
    </body>
    </html>