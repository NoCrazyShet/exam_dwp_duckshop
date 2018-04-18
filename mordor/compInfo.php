<?php
require_once("includes/compInfoController.php");
?>

<div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s12 m6">
              <textarea id="CVR" class="materialize-textarea"><?php echo $compInfo['CVR'];?></textarea>
              <label for="CVR">CVR</label>
        </div>
        <div class="input-field col s12 m6">
              <textarea id="logoText" class="materialize-textarea"><?php echo $compInfo['logoText'];?></textarea>
              <label for="logoText">Logo Text</label>
        </div>
      </div>
        <div class="row">
            <div class="input-field col s12 m12">
              <textarea id="aboutUs" class="materialize-textarea"><?php echo $compInfo['aboutUs'];?></textarea>
              <label for="aboutUs">About Us</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12 m6">
              <textarea id="street" class="materialize-textarea"><?php echo $compInfo['street'];?></textarea>
              <label for="street">Street</label>
            </div>
            <div class="input-field col s6 m3">
                <textarea id="streetNumber" class="materialize-textarea"><?php echo $compInfo['streetNumber'];?></textarea>
                <label for="streetNumber">Street number</label>
            </div>
            <div class="input-field col s6 m3">
                <textarea id="zipCode" class="materialize-textarea"><?php echo $compInfo['zipCode'];?></textarea>
                <label for="zipCode">Zip Code</label>
            </div>
        </div>
        <button class="waves-effect waves-light btn-large" type="submit" name="submit">Update Company Information</button>
    </form>
  </div>