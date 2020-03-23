<?php

namespace App\Services;
use App\Models\Menu;

class MenuService
{
	public function getMenuWithCategory(array $restro_ids)
	{

        $categories = Menu::whereIn('restro_id', $restro_ids)
                        ->get()
                        ->groupBy('category.name');

        return $categories;
	}
}