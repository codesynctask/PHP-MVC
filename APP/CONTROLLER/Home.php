<?php

class Home extends Controller{
    public function index(){
        echo "Home controller";
        $this->view("home");
    }
}