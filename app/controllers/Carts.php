<?php

header('Access-Control-Allow-Origin:*');
header('Content-Type: application/json');
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization, X-Requested-with');
class Carts extends Controller{

    public function __construct(){
        $this->cartModel = $this->model('Cart');
        
    }
    public function AddToCart(){
        $data = file_get_contents("php://input");
        $data = json_decode($data);
        // print_r($data);
        $addcart = $this->cartModel->AddToCart($data->userID,$data->productID,$data->Quantity);
        if($addcart==true){
            print_r(json_encode("add To Cart"));

        }else{
            print_r(json_encode("echec add"));

        }
    }

    //Update Product Controller
    public function UpdateProduct($id){
        $data = file_get_contents("php://input");
        $data = json_decode($data);
        print_r($data);
        $updateProduct = $this->productModel->UpdateProduct($id,$data->productName,$data->productDescription,$data->price,$data->quantity,$data->category);
        if($updateProduct){
            print_r(json_encode("update product"));

        }else{
            print_r(json_encode("echec update"));

        }
    }
    //Delete Product Controller
    public function Delete($id){
        $data = file_get_contents("php://input");
        $data = json_decode($data);
        // print_r($data);
        $deleteProduct = $this->cartModel->Delete($id);
        if($deleteProduct){
            print_r(json_encode("delete successfly"));

        }else{
            print_r(json_encode("echec deleted"));

        }
    }
    //Read 
    public function cart($id){
        
        print_r(json_encode( $this->cartModel->cart($id)));
    }



}

