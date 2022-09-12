<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    use HasFactory;            
    protected $guarded = [];
    public function factory(){
        return $this->belongsTo(Factory::class);
    }
    public function country(){
        return $this->belongsTo(Country::class);
    }
}
