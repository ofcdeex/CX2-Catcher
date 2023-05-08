<?php

namespace Backend\Controllers;

use Backend\Core\Controller;

class HomeController extends Controller
{

    public function Dashboard()
    {
        echo $this->view->render('requests.html', [
            'DB' => json_decode(file_get_contents('Backend/Database/Requests.json'))
        ]);
    }

}