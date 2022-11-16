<?php
    namespace source\app;

    class Web 
    {
        public function home($data)
        {
            /* echo "<h1>Web Home</h1>";
            var_dump($data); */
            $url = ROOT;
            require __DIR__ . "/../../views/home/index.php";
        }

        public function professor($data)
        {
            /* echo "<h1>Web Professor</h1>";
            var_dump($data); */

            $url = ROOT;
            require __DIR__ . "/../../views/professor/index.php";

        }

        public function error($data)
        {
            if(!ROOT){

                echo "<h1>Web Erro {$data["errcode"]}</h1>";
                die();
                
            }
        }
    }
?>