<?php

    namespace Source\App;

    class Professor {

        public function index($dados)
        {
            $url = URL_BASE;
            require __DIR__ . "/../../views/professor/index.php";
        }

        public function cadastro()
        {
            
        }
    }
?>