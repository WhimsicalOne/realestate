<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    public $guarded = [];

    public function listings() {
        return $this->belongsTo(Listing::class, 'listing_id');
    }
}
