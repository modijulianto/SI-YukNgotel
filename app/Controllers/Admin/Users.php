<?php

// berisi \Admin karna controller ini berada didalam folder Admin
namespace App\Controllers\Admin;

// gunakan sintak dibawah agar BaseController tidak error
use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    //--------------------------------------------------------------------

}
