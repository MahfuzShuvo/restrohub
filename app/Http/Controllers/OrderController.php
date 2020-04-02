<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurant;
use App\Order;

class OrderController extends Controller
{
    public function index($id)
    {
    	$restro = Restaurant::find($id);

    	if (!$restro) {
    		abort(404, 'The Restaurant you are looking for is not present');
    	}

    	$orders = Order::where('restro_id', $id)
                    ->orderBy('isComplete')
                    ->paginate(10);

    	return view('order.order-index')
    				->with('orders', $orders)
    				->with('restro', $restro);
    }
}
