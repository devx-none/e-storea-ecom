<?php

class Pages extends Controller{

    public function __construct(){
        $this->postModel = $this->model('Post');
    }



}