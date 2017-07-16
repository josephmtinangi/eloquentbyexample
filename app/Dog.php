<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dog extends Model
{
	public function dogsRequiringAntiRabbitBiteShot()
	{
		return $this->ageGreaterThan(6);
	}

    public function scopeAgeGreaterThan($query, $age)
    {
    	return $query->where('age', '>', $age);
    }
}
