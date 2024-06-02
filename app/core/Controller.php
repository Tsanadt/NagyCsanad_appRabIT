<?php

class Controller{
    #loading the chosen view and passing tha data to it
    public function view($view, $data=[]){
        require_once 'views/'.$view.'.php';
    }
}
