<?php

namespace app\login\controller;

use think\controller\Rest;

class Index extends Rest
{
    public function index()
    {
        return "123";
    }

    public function checkPassword()
    {
       echo input('name');die;
        return json(['ss' => '11'], 200);
    }
}
