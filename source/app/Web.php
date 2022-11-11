<?php
    namespace source\app;

    class Web 
    {
        public function home($data)
        {
            echo "<h1>Web Home</h1>";
            var_dump($data);
        }

        public function professor($data)
        {
            echo "<h1>Web Professor</h1>";
            var_dump($data);

            $url = URL_BASE;
            require __DIR__ . "../../views/professor/cadastro.php";

        }

        public function error($data)
        {
            echo "<h1>Web Erro {$data["errcode"]}</h1>";
            var_dump($data);
        }
    }
?>