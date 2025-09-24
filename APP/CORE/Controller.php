<?php


class Controller{
    function view($fileName)
    {
        $fileName = "../app/view/" . $fileName . ".view.php";

        // loading controller files
        if (file_exists($fileName)) {
            require $fileName;
        } else {
            $fileName = "../app/view/404.view.php";
            require $fileName;
        }
    }
}