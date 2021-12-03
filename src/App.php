<?php

namespace App;

require "connect.php";

class App
{
    public function run()
    {
        $connect = new Connect1();
        $connect->getConnect();
        $app = new Menu();
        $app->welcome($connect);
    }
}