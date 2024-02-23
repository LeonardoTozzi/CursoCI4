<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Main extends BaseController
{
    public function index()
    {
        echo "Hello World";
    }

    public function pagina_1()
    {
        echo "página 1";
    }
    public function pagina_2()
    {
        echo "página 2";
    }

    public function ph_any($valor1, $valor2)
    {
        echo $valor1;
        echo '<br>';
        echo $valor2;
    }

    public function ph_segment($valor1)
    {
        echo $valor1;
    }

    public function ph_num($valor1)
    {
        echo $valor1;
    }

    public function ph_alpha($valor1)
    {
        echo $valor1;
    }

    public function ph_alphanum($valor1)
    {
        echo $valor1;
    }

}
