<?php

namespace App\Controllers;

use App\Generics\BaseController;

class HomeController extends BaseController
{
    public function index($countPeger = 0, $outrosParametros = [])
    {
        $dados = [
            'titulo' => 'Home',
            'subtitulo' => 'Dashboard',
            'totalAgencias' => 0,
            'totalParceiros' => 0,
            'totalEmpreendimentos' => 0,
            'totalProponentes' => 0,
            'totalVendedores' => 0,
            'totalCartorioRegistros' => 0,
            'totalCodigoCCAs' => 0,
            'totalConvenioConsignados' => 0,
        ];

        return view('home/index', $dados);
    }

    public function perfil(){
        $dados = [
            'titulo' => 'Home',
            'subtitulo' => 'Perfil',
        ];

        return view('home/perfil', $dados);
    }
}
