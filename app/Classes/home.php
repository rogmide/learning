<?php

namespace App\Classes;

class Home
{
    public static function index()
    {

        echo '<pre>';
        var_dump($_REQUEST);
        echo '</pre>';

        echo '<pre>';
        var_dump($_GET);
        echo '</pre>';

        echo '<pre>';
        var_dump($_POST);
        echo '</pre>';

        return '<form action="/?foo=bar&amount=250" method="post"><lable>Amount</lable><input type="text" name="amount" />';
    }
}
