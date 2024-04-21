<?php

namespace app\controllers;

use app\core\Controller;

class MainController extends Controller
{

    public function homepage()
    {
                include '../public/assets/views/main/homepage.php';
    }

    public function login()
    {
        include '../public/assets/views/main/login.php';
    }

    public function notFound()
    {
        echo "not Found";
    }

}
