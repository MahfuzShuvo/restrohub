<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Services\RestroService;

class PagesController extends Controller
{
    public function dashboard(RestroService $restroService)
    {
    	$restros = $restroService->userRestroAndTables();

        return view('index', compact('restros'));
    }
}
