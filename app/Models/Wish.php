<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wish extends Model
{
    use HasFactory;

    public $guarded = [];

    public function users() {
        return $this->hasMany(User::class);
    }

    public function listings() {
        return $this->hasMany(Listing::class);
    }
}
