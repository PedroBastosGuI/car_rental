<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specification extends Model
{
    use HasFactory;
    protected $fillable = ['name','description'];

    public function cars()
    {
        return $this->belongsToMany(Car::class,'spesifications_cars','car_id')->withTimestamps();
    }
}
