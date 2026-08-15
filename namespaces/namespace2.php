<?php

require_once("myclass.php");
use myNameSpace\myClass;


class Main
{
    public $posts;

    public function __construct()
    {
        $this->posts = new myClass;
    }
}

$app = new Main;
$app->posts->greet();