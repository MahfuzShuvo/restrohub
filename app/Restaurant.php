<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Order;

class Restaurant extends Model
{
	protected $guarded = [];

	protected $appends = ['slug', 'orderSlug'];



    public function owner()
    {
    	return $this->belongsTo(User::class, 'owner_id');
    }

    public function order()
    {
        return $this->hasMany(Order::class, 'restro_id');
    }

    public function getSlugAttribute()
    {
    	return route('restros.menu', $this->id);
    }

    public function getOrderSlugAttribute()
    {
    	return route('restros.order', $this->id);
    }
}
