<?php

namespace App\Services;
use App\Models\Menu;

class MenuService
{
	public function getMenuWithCategory($restroId)
	{

        $menuItems = Menu::where('restro_id', $restroId)
                        ->get()
                        ->groupBy('category.name');

        return $menuItems;
	}
}