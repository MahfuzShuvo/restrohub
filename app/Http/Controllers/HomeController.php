<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\MenuService;
use App\Services\RestroService;
use App\Models\Menu;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(MenuService $service, RestroService $restroService)
    {
        $restroId = 1;
        $menus = $service->getMenuWithCategory($restroId);

        $restros = $restroService->userRestroAndTables();
        
        return view('home', compact('menus', 'restroId', 'restros'));
    }
}
