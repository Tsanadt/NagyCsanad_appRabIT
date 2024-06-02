<?php

class Advertisement{
    public $id;
    public $username;
    public $title;
    public function __construct($id, $username, $title){
        $this->id = $id;
        $this->username = $username;
        $this->title = $title;
    }
}