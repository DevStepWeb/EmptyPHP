<?php

namespace app\controllers\site;

use core\View;
use core\Controller;  

class HomeController extends Controller
{

    public function index( )
    { 
        $this->view->setPageTitle('Home - DevStep'); 
    }
}
