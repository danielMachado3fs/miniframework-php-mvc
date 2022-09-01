<?php

namespace App\Controllers;

//os recursos do miniframework
use MF\Controller\Action;
use MF\Model\Container;

//os models
use App\Models\Produto;
use App\Models\Info;

class Index extends Action
{
    public function index()
    {
        // $produto = Container::getModel("Produto");

        // $produtos = $produto->getProdutos();

        $produtos = [
            [
                "id" => 1,
                "descricao" => "Arroz",
                "preco" => "R$ 25,00",
            ],
            [
                "id" => 2,
                "descricao" => "Feijao",
                "preco" => "R$ 10,00",
            ],
            [
                "id" => 3,
                "descricao" => "Macarrão",
                "preco" => "R$ 5,00",
            ],
        ];

        @$this->view->dados = $produtos;

        $this->render("index", "layout1");
    }

    public function sobreNos()
    {
        $info = Container::getModel("Info");

        $informacoes = $info->getInfo();

        @$this->view->dados = $informacoes;

        $this->render("sobreNos", "layout1");
    }
}

?>
