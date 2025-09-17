<?php

class App
{
    private function getURL()
    {
        $url = $_GET["url"] ?? "home";
        $url = explode("/", trim($url, "/"));
        return $url;
    }

    public function handleController()
    {
        $url = $this->getURL();
        $filename = "../app/controller/" . $url[0] . ".php";
        if (file_exists($filename)) {
            require $filename;
        } else {
            $filename = "../app/controller/_404.php";
            require $filename;
        }
    }
}
