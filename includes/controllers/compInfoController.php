<?php
require_once(__DIR__ . "/../permanents/connection.php");
$query = "SELECT * FROM companyinfo";
    $stmt = $connection->query($query);
    $compInfo = $stmt->fetch(PDO::FETCH_ASSOC);

    if(isset($_GET['action'])){
        $action = $_GET["action"];
            if ($action == "update")
            {
                $logoText = $_POST["logoText"];
                $aboutUs = $_POST['aboutUs'];
                $street = $_POST['street'];
                $streetNr = $_POST['streetNumber'];
                $zip = $_POST['zipCode'];
                $CVR = $compInfo['CVR'];
                $query2 = "UPDATE companyinfo SET logoText = '{$logoText}', aboutUs = '{$aboutUs}', street = '{$street}', streetNumber = '{$streetNr}', zipCode = '{$zip}' WHERE CVR= '{$CVR}'";

                $stmt = $connection->prepare($query2);
                $stmt->execute();

                include("../permanents/functions.php");
                redirect_to("../../mordor/mordorPage.php?page=compInfo");
            }
    }



