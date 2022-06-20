<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecificationCar extends Model
{
    use HasFactory;
    protected $table = 'specifications_cars';

    public $incrementing = false;

    protected $fillable = ['car_id','specification_id'];
}
