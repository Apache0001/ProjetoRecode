<?php
    namespace App\Controllers ;
    // Os recurso do miniframework
    use MF\Controller\Action ;
    use MF\Model\Conteiner;

    //Os models
   
    class IndexController extends Action{

        //Renderizando arquivos dentro da View index
        public function index(){
            
            $this->render('index','layout');


        }

        public function produtos(){
            $this->render('produtos', 'layout');
        }

    }