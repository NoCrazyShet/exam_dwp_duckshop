<?php
require_once(__DIR__ . "/../permanents/connection.php");

$query = "SELECT * FROM product";
$stmt = $connection->query($query);
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
$rows = '<div class="row">';

$productCount = 0;
foreach($products as $product) {
    $productID = $product['productID'];
    $categoryID = $product['categoryID'];
    $productRating = $product['productRating'];
    $productIMG = $product['productIMG'];
    $productDescription = $product['productDescription'];
    $productStock = $product['productStock'];
    $productPrice = $product['productPrice'];
    $productName = $product['productName'];



    if($productCount == 0){
    echo '<div class="row">';
    }
    echo '<div class="col s6 m3">
      <div class="card">
        <div class="card-image">
          <img src="../images/'.$productIMG.'">
          <span class="card-title black-text">'.$productName.'</span>
        </div>
        <div class="card-content">
          <p>'.$productDescription.'</p>
        </div>
        <div class="card-action">
          <a href="../mordor/mordorPage.php?id='.$productID.'&page=updateProdPage">Edit this product</a>
        </div>
      </div>
    </div>';
    if($productCount==4){
        $productCount=1;
        echo '</div>';
    }
}


if(!empty($_GET['action'])) {
    if($_GET['action']=='update'){

        $_GET['action']= '';
    }
}