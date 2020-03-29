<?php

namespace App\Rules;

use App\Models\Category;
use Illuminate\Contracts\Validation\Rule;

class RestroCategoryValidation implements Rule
{
    private $restroId;

    public function __construct($restroId)
    {
        $this->restroId = $restroId;
    }

    public function passes($attribute, $value)
    {
        $conditions = [
            'restro_id' => $this->restroId,
            'name' => $value,
        ];

        if (Category::where($conditions)->first()) {
            return true;
        }

        return false;
    }

    public function message()
    {
        return 'This category does not belong to this restaurant.';
    }
}
