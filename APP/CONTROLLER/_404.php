<?php

class _404 extends Controller{
    public function index(){
        echo "_404 controller";
        $this->view("404");
    }
}