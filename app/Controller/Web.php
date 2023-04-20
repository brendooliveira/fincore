<?php

namespace App\Controller;

use App\Core\Controller;

class Web extends Controller
{
    public function home()
    {
        view("web.home");
    }
}
