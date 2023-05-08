<?php


namespace Backend\Core;

class Controller
{

    protected $view;


    public function __construct()
    {
        $loader = new \Twig\Loader\FilesystemLoader('Frontend');
        $this->view = new \Twig\Environment($loader);

        $this->view->addGlobal('url_base', '');
    }

}