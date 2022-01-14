<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $Datos["Mexico"] = "Peso";
        $Datos["USA"] = "Dollar";
        $Datos["Inglaterra"] = "Libra";
        $Datos["Japon"] = "Yen";
        $Datos["Rusia"] = "Rublo";
      /*   print_r($Datos); */

        return view('Home', $Datos);
    }
}
