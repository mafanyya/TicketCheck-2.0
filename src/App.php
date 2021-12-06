<?php

namespace App;

class App
{
    public function __construct($connect)
    {
    }

    public function run($connect):void
    {
        $app = new Menu();
        $app->welcome($connect);
    }
}