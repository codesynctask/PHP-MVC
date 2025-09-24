<?php

class Auth extends Controller{
    public function index(){
        echo "AUth controller";
        $this->view("/auth/login");
        // deteremine to show login or signup
    }
    public function login(){
        echo "login controller";
        $this->view("/auth/login");
    }
    public function signup(){
        echo "signup controller";
        $this->view("/auth/signup");
    }
    public function logout(){
        echo "logout controller";
        $this->view("/auth/logout");
    }
}