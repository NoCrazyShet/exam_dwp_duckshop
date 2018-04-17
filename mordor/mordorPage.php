<?php   require_once("includes/session.php");
        require_once("includes/connection.php");
        require_once("includes/functions.php");
        confirm_logged_in();
?>
    <html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-15"/>
    </head>

    <body>
    <h1 align="center">Welcome to the backend</h1>
    <form action="includes/logoutController.php" method="get">
        <input type="submit" value="Click here to log out!">
    </form>
    </body>
    </html>