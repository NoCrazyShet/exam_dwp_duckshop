<?php
require_once("includes/permanents/connection.php");
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-15"/>
        <link rel="stylesheet" type="text/css" href="main.css">
    </head>
    <body>
        <header>
            <?php
            include("includes/presentation/header.php");
            ?>
        </header>

        <main>

        </main>

        <footer class="page-footer">
            <?php
            $stmt = $connection->query("SELECT CVR FROM companyinfo");
            $CVR = $stmt->fetch(PDO::FETCH_ASSOC);
            include("includes/presentation/footer.php");
            ?>
        </footer>
    </body>
</html>
