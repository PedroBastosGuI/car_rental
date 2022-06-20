<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $fillable = ['name','description',
    'daily_rate','available','license_plate','fine_amount','brand','category_id'];

    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }


    public function carImages()
    {
        return $this->hasMany(CarImage::class,'car_id');
    }

    public function rentals()
    {
        return $this->hasMany(Rental::class,'car_id');
    }

    public function specifications()
    {
        return $this->belongstoMany(Specification::class,'specifications_cars','car_id','specification_id')->withTimestamps();
    }
}



