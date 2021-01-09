<?php
    namespace MF\Init;

    abstract class Bootstrap{
        protected $routes;

        //Método construtor da classe Route
        public function __construct(){
            $this->initRoutes();
            $this->run($this->getUrl());
        }

        //Método getter e setter
        public function getRoutes(){
            return $this->routes;
        }
        public function setRoutes($routes){
            $this->routes = $routes ;
        }
        
        /* Método para gerar dinamicamente as classes que estarao dentro
        Dentro de App Controllers */

        protected function run($url){
            foreach($this->getRoutes() as $key => $route){

                if($url == $route['route']){
                    $class =  "App\\Controllers\\".$route['controller'];
                    $controller = new $class;
                    $action = $route['action'];
                    $controller->$action();
                }
            }
        }

        /* Método que pega a url passada */
        protected function getUrl(){
            return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        }

    }


?>