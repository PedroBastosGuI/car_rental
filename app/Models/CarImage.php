<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarImage extends Model
{
    use HasFactory;
    protected $table = 'cars_image';

    protected $fillable = ['car_id', 'image_name'];

    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}
