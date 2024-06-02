<?php
class HomeController extends Controller{

    #it is the default page
    public function index(){
        $this->view('home');
    }
}