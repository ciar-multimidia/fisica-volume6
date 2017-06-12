<?php
define("ROOT", __DIR__ ."/");
define("HTTP", ($_SERVER["SERVER_NAME"] == "localhost:8888")
   ? "http://localhost:8888/fisica-volume6/"
   : "http://temporario.ciar.ufg.br/teste-php/"
);