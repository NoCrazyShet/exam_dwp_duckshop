<?php   require_once("adminIncludes/session.php");
        require_once("adminIncludes/connection.php");
        require_once("adminIncludes/functions.php");
        //confirm_logged_in();
?>
    <html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-15"/>
    </head>

    <body>
    <h1 align="center">Welcome to the backend</h1>
    <form action="adminIncludes/logoutController.php" method="get">
        <input type="submit" value="Click here to log out!">
    </form>
    </body>
    </html>