<?php
require_once(__DIR__ . "/../permanents/connection.php");

if(isset($_GET['id'])){
$id = $_GET['id'];
}

$query = "SELECT * FROM product WHERE productID ='{$id}'";
$stmt = $connection->query($query);
$products = $stmt->fetch(PDO::FETCH_ASSOC);

if(isset($_GET['action'])){
    $action = $_GET["action"];
    if ($action == "update")
    {
        $productName = $_POST["productName"];
        $productDescription = $_POST['productDescription'];
        $productStock = $_POST['productStock'];
        $productPrice = $_POST['productPrice'];
        $productCategory = $_POST['categoryID'];
        $query2 = "UPDATE product SET productName = '{$productName}', productDescription = '{$productDescription}', productStock = '{$productStock}', productPrice = '{$productPrice}' WHERE productID = '{$id}'";

        $stmt = $connection->prepare($query2);
        $stmt->execute();

        include("../permanents/functions.php");
        redirect_to("../../mordor/mordorPage.php?page=products");
    }
}