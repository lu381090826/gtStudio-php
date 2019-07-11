<?php

namespace app\login\controller;

use app\index\controller\Api;

class Index extends Api
{
    public function index()
    {
        return "123";
    }

    public function checkPassword()
    {
        $name = input('name');
        if (empty($name)) {
//            return json('', 200);
        }
        return json(['name' => $name], 200);
    }
}
