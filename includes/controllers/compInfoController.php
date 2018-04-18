<?php
require_once("../includes/permanents/connection.php");

    $stmt = $connection->query("SELECT * FROM companyinfo");
    $compInfo = $stmt->fetch(PDO::FETCH_ASSOC);

    function updateCompInfo() {

    }