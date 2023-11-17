<?php 
include ("Controller/ProductController.php");

use Controller\ProductController;

$productControler = new ProductController;

echo $productControler->getAllProduct()

?>