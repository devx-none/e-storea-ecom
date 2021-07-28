<?php


class Products extends Controller{

    public function __construct(){
        $this->productModel = $this->model('Product');
        
    }
    public function AddProduct(){
        $data = file_get_contents("php://input");
        $data = json_decode($data);
        // print_r($data);
        $addProduct = $this->productModel->AddProduct($data->ProductId,$data->productName,$data->productDescription,$data->price,$data->quantity,$data->category);
        if($addProduct==true){
            print_r(json_encode("add product"));

        }else{
            print_r(json_encode("echec add"));

        }
    }

    //Update Product Controller
    public function UpdateProduct($id){
        $data = file_get_contents("php://input");
        $data = json_decode($data);
        $updateProduct = $this->productModel->UpdateProduct($id,$data->productName,$data->productDescription,$data->price,$data->quantity,$data->category);
        if($updateProduct){
            print_r(json_encode("update product"));

        }else{
            print_r(json_encode("echec update"));

        }
    }
    //Delete Product Controller
    public function DeleteProduct($id){
        $data = file_get_contents("php://input");
        $data = json_decode($data);
        // print_r($data);
        $deleteProduct = $this->productModel->DeleteProduct($id);
        if($deleteProduct){
            print_r(json_encode("delete successfly"));

        }else{
            print_r(json_encode("echec deleted"));

        }
    }
    //Read 
    public function ListProduct(){
        
        print_r(json_encode($products = $this->productModel->ListProducts()));
    }



}

