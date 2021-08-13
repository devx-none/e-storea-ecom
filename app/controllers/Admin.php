<?php

class Admin extends Controller{

    public function __construct(){
        $this->adminModel = $this->model('Admin');
        
    }
    public function register(){
        $register = $this->adminModel->create($this->data->first_name,$this->data->last_name,$this->data->email,$this->data->password,$this->data->phone);
        print_r(json_encode($register));
    }
    public function login(){
        
        print_r(json_encode($user = $this->userModel->login()));
    }



}