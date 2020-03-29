<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Menu;

use App\Rules\RestroCategoryValidation;

class MenuController extends Controller
{
    public function saveMenuItem(Request $request)
    {
    	$postData = $this->validate($request, [
    		'restroId' => 'required|numeric',
    		'price' => 'required|numeric',
    		'item' => 'required',
            'description' => 'required|min:3',
    		'category' => ['required', new RestroCategoryValidation(request('restroId'))],
    	]);

    	$category = Category::where('restro_id', $postData['restroId'])
    						->where('name', $postData['category'])
    						->first();

    	$menu = Menu::create([
    		'name' => $postData['item'],
    		'price' => $postData['price'],
    		'description' => $postData['description'],
    		'restro_id' => $postData['restroId'],
    		'category_id' => $category->id,
    	]);

    	return response()->json($menu, 201);

        // return $request->all();
    }
}
