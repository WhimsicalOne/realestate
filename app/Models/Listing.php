<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    public $guarded = [];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function type() {
        return $this->belongsTo(Type::class);
    }

    public function agent() {
        return $this->belongsTo(Agent::class);
    }

    public function images() {
        return $this->hasMany(PropertyImages::class);
    }

}
