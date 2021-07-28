<?php

class Wishlists extends Controller{

    public function __construct(){
        $this->wishlistModel = $this->model('Wishlist');
        
    }
    public function AddWishlist(){
        $data = file_get_contents("php://input");
        $data = json_decode($data);
        
        $wishlist = $this->wishlistModel->AddWishlist($data->userID,$data->productID);
        if($wishlist==true){
            print_r(json_encode("wishlist"));
        }else{
            print_r(json_encode("echec"));

        }
    }
    public function wishlist($userID){
        $data = file_get_contents("php://input");
        $data = json_decode($data);
        
        
        print_r(json_encode($this->wishlistModel->wishlist($userID)));
         
    }



}