<?php

/*
App Core Class
Create URL and loads core controller
URL FORMAT - /controller/method/params
*/

class Core{
  
    protected $currentController = 'pages';
    protected $currentMethod ='index';
    protected $params = [];

    public function __construct(){
        // print_r($this->getUrl());
        $url = $this->getUrl();

      //Look in controller for first value

      if(file_exists('../app/controllers/'.$url[0].'.php')){
        //   if Exists ,set as controller
          $this->currentController = ucwords($url[0]);  //ucwords Convert the first character of each word to uppercase
        //   unset 0 index
          unset($url[0]);
      }
    //   require the controller
      require_once '../app/controllers/'.$this->currentController.'.php';

      // Instantiate controller Class
      $this->currentController = new $this->currentController;

      //Check for seconde part of url
      if(isset($url[1])){
      //Check to see if method exists
      if(method_exists($this->currentController, $url[1])){
          $this->currentMethod = $url[1];
          unset($url[1]);
      }
    }
    // Get params 
    $this->params = $url ? array_values($url) : [];
    
    // call a calback with array of params
    call_user_func_array([$this->currentController,$this->currentMethod],$this->params); //Appelle une fonction de rappel avec les paramètres rassemblés en tableau
    
 }

    public function getUrl(){
        if(isset($_GET['url'])){
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}