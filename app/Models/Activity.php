<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $fillable = ['type', 'date', 'description'];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}

