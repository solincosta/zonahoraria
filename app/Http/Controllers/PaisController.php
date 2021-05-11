<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaisController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function view($id)
    {
        $paises = array();

        $colombia = new Pais(1, "Colombia", "America/bogota");
        $francia = new Pais(2, "Francia", "Europe/Paris");
        $singapur = new Pais(3, "Singapur", "Asia/Singapore");
        $rusia = new Pais(4, "Rusia", "Europe/Moscow");
        $alemania = new Pais(5, "Alemania", "Europe/Berlin");

        $pais = null;

        array_push($paises, $colombia);
        array_push($paises, $francia);
        array_push($paises, $singapur);
        array_push($paises, $rusia);
        array_push($paises, $alemania);

        foreach ($paises as $pai) {
            if ($pai->id == $id) {
                $pais = $pai;
            }
        }

        if ($pais !== null) {
            return view('view', compact('pais'));
        }
    }
}

class Pais
{
    public $id;
    public $nombre;
    public $zona;

    public function __construct($id, $nombre, $zona)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->zona = $zona;
    }
}
