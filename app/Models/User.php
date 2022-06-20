<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $table = 'users';

    protected $fillable = ['name','password','email','driver_license','admin','avatar'];

    public function rentals()
    {
        return $this->hasMany(Rental::class,'user_id');
    }
}
