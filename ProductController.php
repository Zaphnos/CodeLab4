<?php
namespace Controller;

include "Traits\ResponseFormatter.php";
include "Controller\Controller.php";

use Traits\ResponseFormatter as responses;

// Disimulisasikan sebagai class controller product
class ProductController extends Controller{
    // menggubakan traits yang sudah dibuat
    use responses;
    // MAGIC METHOD
    public function __construct() {
        $this -> controllerName = "Get All Product";
        $this -> controllerMethod = "Get";
    }

    public function getAllProduct()  {
        $dummyData = [
            "Air mineral", 
            "Kebab", 
            "Spaghetti", 
            "Jus jambu"
        ];

        $response = [
            "controller_attribute" => $this->getControllerAttribute(),
            "product" => $dummyData
        ];

        return $this -> responseFormatter(200, "succes", $response);
    }
}
?>