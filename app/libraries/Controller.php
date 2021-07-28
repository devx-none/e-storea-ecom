<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');


/* 
Base Controller
Loads the models and views 
*/

class Controller {
    //Load models 
    public function model ($model){

        //require model file 
        require_once '../app/models/'.$model.'.php';

        //Instatiale model 
        return new $model();
    }

    //Load views
    public function view ($view ,$data = []){
        //check for view file

        if(file_exists('../app/views/'.$view.'.php')){
            require_once '../app/views/'.$view.'.php';
        }else{
            die('View does not exist..');
        }
    }
}