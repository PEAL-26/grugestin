<?php

namespace App\Controllers;

class HomeController extends BaseController
{
    public function Index()
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
}
