<?php

namespace MF\Controller;

abstract class Action
{
    protected $data;

    public function __construct()
    {
        $this->data = new \stdClass();
    }

    protected function render($view, $view_data)
    {
        /* atribui o código da view no atributo da classe para que seja possível ser utilizado no método content que será
         * chamado dentro do layout
         * */
        $this->data->view = $view;

        if (file_exists("../app/views/layout.php")) {
            require_once "../app/views/layout.php";
        } else {
            $this->content($view_data);
        }
    }

    protected function load_head()
    {
        require_once "../app/views/includes/head.php";
    }

    protected function load_topbar()
    {
        require_once "../app/views/includes/topbar.php";
    }

    protected function load_sidebar()
    {
        require_once "../app/views/includes/sidebar_menu.php";
    }

    protected function content($view_data)
    {
        $classAtual = get_class($this);

        $classAtual = str_replace("App\\Controllers\\", "", $classAtual);

        // $classAtual = strtolower(str_replace('Controller', '', $classAtual));

        require_once "../app/views/" . $classAtual . "/" . $this->data->view . ".php";
    }
}
