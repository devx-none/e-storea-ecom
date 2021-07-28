<?php

class Users extends Controller{

    public function __construct(){
        $this->userModel = $this->model('User');
        
    }
    public function register(){
        $data = file_get_contents("php://input");
        $data = json_decode($data);
        $hashPass = password_hash($data->password, PASSWORD_DEFAULT);
        
        $register = $this->userModel->register($data->first_name,$data->last_name,$data->email,$hashPass,$data->phone);
        if($register==true){
            print_r(json_encode("Welcome"));
        }else{
            print_r(json_encode("echec"));

        }
    }
    public function login(){
        $data = file_get_contents("php://input");
        $data = json_decode($data);
        
        $login = $this->userModel->login($data->email,$data->password);
        if($login){
        print_r(json_encode("login successfly"));
         
        }else{
        print_r(json_encode("password or email incorrect"));

        }
    }



}