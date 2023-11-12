<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['name', 'email', 'phone'];

    public function companies()
    {
        return $this->hasMany(Company::class);
    }

    public function activities()
    {
        return $this->hasMany(Activity::class);
    }
}

