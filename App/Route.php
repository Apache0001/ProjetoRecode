<?php
    namespace App;
    use MF\Init\Bootstrap;

    class Route extends Bootstrap{

        //Rotas que o usuario possue para navegar

        public function InitRoutes(){

            $routes['home'] = array(
                'route' => '/',
                'controller' => 'IndexController',
                'action' => 'index'
            );
            $routes['produtos'] = array(
                'route' => '/produtos',
                'controller' => 'IndexController',
                'action' => 'produtos'
            );

            //Setando o valor do atributo Router
            $this->setRoutes($routes);

        }
    }

?>