<?php
require_once("../includes/controllers/updateProdPageController.php");

?>


<div class="row">
    <form class="col s12" name="lars" id="lars" method="POST" action="../includes/controllers/updateProdPageController.php?action=update&id=<?php echo $products['productID']?>">
      <div class="row">
        <div class="input-field col s12 m12">
              <textarea id="productName" name="productName" class="materialize-textarea"><?php echo $products['productName'];?></textarea>
            <label for="productName">Product Name</label>
        </div>
      </div>
<div class="row">
    <div class="input-field col s12 m12">
        <textarea id="productDescription" name="productDescription" class="materialize-textarea"><?php echo $products['productDescription'];?></textarea>
        <label for="productDescription">Product Description</label>
    </div>
</div>
<div class="row">
    <div class="input-field col s6 m4">
        <textarea id="productPrice" name="productPrice" class="materialize-textarea"><?php echo $products['productPrice'];?></textarea>
        <label for="productPrice">Price</label>
    </div>
    <div class="input-field col s6 m4">
        <textarea id="productStock" name="productStock" class="materialize-textarea"><?php echo $products['productStock'];?></textarea>
        <label for="productStock">Stock</label>
    </div>
    <div class="input-field col s6 m4">
        <textarea id="categoryID" name="categoryID" class="materialize-textarea"><?php echo $products['categoryID'];?></textarea>
        <label for="categoryID">Category</label>
    </div>
</div>
<button class="waves-effect waves-light btn-large" type="submit" name="submit">Update Product</button>
</form>
</div>