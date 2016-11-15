<?php
namespace app\index\controller;

use app\index\model\User;

class Index extends BaseController
{
    public function index()
    {
        return $this->fetch('index');
    }
}
