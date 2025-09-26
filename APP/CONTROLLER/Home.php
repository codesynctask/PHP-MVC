<?php

class Home extends Controller
{
    public function index()
    {
        echo "Home controller";
        $user = new User();

        $user->create(["name"=>"Deepak","email"=>"deepak@123"]);
        $this->view("home");
    }
}
