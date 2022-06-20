<?php

namespace App\Controller;

use Effernet\Core\Application\Controller;

class Home extends Controller{

    public function index()
    {
        $this->setLayout('main');
        $this->render('home_page');
    }

    public function user()
    {
        $this->setLayout('main');
        $this->render('user_page');
    }

}