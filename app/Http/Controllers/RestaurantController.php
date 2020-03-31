<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Services\RestroService;

class RestaurantController extends Controller
{

    public function index(RestroService $restroService)
    {

        $restros = $restroService->userRestroAndTables();

        return view('restaurant.restro-index', compact('restros'));

    }

    public function store(Request $request)
    {
    	$postData = $this->validate($request, [
    		'name' => 'required|min:3',
    		'location' => 'required|min:3',
    		'tables' => 'required|integer'

    	]);

    	$restro = Auth::user()
    				->restaurant()
    				->create($postData);

    	return response()->json($restro, 201);

    	// return $request->all();
    }
}
