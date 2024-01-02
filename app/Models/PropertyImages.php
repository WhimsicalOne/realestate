<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyImages extends Model
{
    use HasFactory;

    public $guarded = [];

    public function listing() {
        return $this->belongsTo(Listing::class, 'listing_id');
    }
}
