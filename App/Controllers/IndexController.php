<?php

    namespace App\Controllers;
    
    use MF\Controller\Action;
    use MF\Model\Container;
    
    use App\Models\Produto;
    use App\Models\Info;

    

    class IndexController extends Action{

        public function index(){
            //$this->view->dados = array('Sofá', 'Cadeira', 'Cama');

            //instância de conexão
            //$conn = Connection::getDb();

            //instanciar modelo
            //$produto = new Produto($conn);

            $produto = Container::getModel('Produto');

            $produtos = $produto->getProdutos();

            @$this->view->dados = $produtos;

            $this->render('index', 'layout');
        }

        public function sobreNos(){
            //$this->view->dados = array('Notebook', 'Smartphone');

            //$conn = Connection::getDb();

            //instanciar modelo
            //$info = new Info($conn);

            $info = Container::getModel('Info');

            $infos = $info->getInfo();

            @$this->view->dados = $infos;

            $this->render('sobre_nos', 'layout');
        }     

    }

?>