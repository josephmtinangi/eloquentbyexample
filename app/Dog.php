<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dog extends Model
{
	use SoftDeletes;

	protected $dates = ['deleted_at'];
	
	public function dogsRequiringAntiRabbitBiteShot()
	{
		return $this->ageGreaterThan(6);
	}

    public function scopeAgeGreaterThan($query, $age)
    {
    	return $query->where('age', '>', $age);
    }

}
	