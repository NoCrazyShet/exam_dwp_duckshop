<?php
$allowed = array('compInfo', 'products');
$page = ( isset($_GET['page']) ) ? $_GET['page'] : 'mordorPage';
if ( in_array($page, $allowed) ) {
    include("./$page.php");
}
