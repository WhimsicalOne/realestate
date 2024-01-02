<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estate extends Model
{
    use HasFactory;

    public $guarded = [];

    /**
     * Get all of the users for the Estate
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }

    /**
     * Get the Agent associated with the Estate
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function agent(): HasOne
    {
        return $this->hasOne(Agent::class);
    }

}
