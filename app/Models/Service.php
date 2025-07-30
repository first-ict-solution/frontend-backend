<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Feature;  // <-- Add this line

class Service extends Model
{
    protected $fillable = ['icon','title', 'description','color'];

    public function features()
    {
        return $this->hasMany(Feature::class, 'service_id');
    }
}
