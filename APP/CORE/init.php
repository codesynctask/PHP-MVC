<?php

// auto load class if not required
spl_autoload_register(function ($className) {
    require "../app/model/" . ucfirst($className) . ".php";
});


// import of file for index page
require "config.php";
require "utility.php";
require "Controller.php";
require "Database.php";
require "Model.php";
require "App.php";