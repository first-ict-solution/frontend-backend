<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    protected $fillable = ['features', 'service_id'];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
