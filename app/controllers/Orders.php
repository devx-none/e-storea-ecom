<?php

header('Access-Control-Allow-Origin:*');
header('Content-Type: application/json');
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization, X-Requested-with');
class Orders extends Controller
{

    public function __construct()
    {
        $this->orderModel = $this->model('Order');
    }
    public function AddOrder()
    {
        $data = file_get_contents("php://input");
        $data = json_decode($data);
        // print_r($data);
        $addOrder = $this->orderModel->AddOrder($data->userID, $data->adsress, $data->city, $data->zip, $data->phone);
        if ($addOrder == true) {
            print_r(json_encode("add order"));
        } else {
            print_r(json_encode("echec add"));
        }
    }
    public function AddOrderD()
    {
        // , $data->adsress, $data->city, $data->zip, $data->phone
        $data = file_get_contents("php://input");
        $data = json_decode($data);
        // print_r($data);
        $addOrder = $this->orderModel->AddOrderD($data->orderID,$data->userID);
        if ($addOrder) {
            print_r(json_encode("add add"));
        } else {
            print_r(json_encode("echec add"));
        }

    }

    //Update Product Controller
    public function UpdateProduct($id)
    {
        $data = file_get_contents("php://input");
        $data = json_decode($data);
        $updateProduct = $this->productModel->UpdateProduct($id, $data->productName, $data->productDescription, $data->price, $data->quantity, $data->category);
        if ($updateProduct) {
            print_r(json_encode("update product"));
        } else {
            print_r(json_encode("echec update"));
        }
    }
    //Delete Product Controller
    public function DeleteProduct($id)
    {
        $data = file_get_contents("php://input");
        $data = json_decode($data);
        // print_r($data);
        $deleteProduct = $this->productModel->DeleteProduct($id);
        if ($deleteProduct) {
            print_r(json_encode("delete successfly"));
        } else {
            print_r(json_encode("echec deleted"));
        }
    }
    //Read 
    public function ListProduct()
    {
        $products = $this->productModel->ListProducts();
        echo json_encode($products, JSON_PRETTY_PRINT);
    }
    public function SingleProduct($id)
    {
        $data = file_get_contents("php://input");
        $data = json_decode($data);
        $products = $this->productModel->SingleProduct($id);
        // print_r($data);
        // $singleProduct = $this->productModel->SingleProduct($id);
        echo json_encode($products, JSON_PRETTY_PRINT);
    }
    public function ProductByCategory()
    {
        $data = file_get_contents("php://input");
        $data = json_decode($data);
        $category = $data->category;
        $products = $this->productModel->ProductByCategory($category);

        echo json_encode($products, JSON_PRETTY_PRINT);
    }

    //NEW ARRIVAL 
    public function NewArrival()
    {

        print_r(json_encode($products = $this->productModel->NewArrival()));
    }
}
