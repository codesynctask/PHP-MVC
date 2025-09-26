<?php

class Product extends Model {
    protected $table = "Products";
    protected $allowedFields = ["name", "email"];
}

