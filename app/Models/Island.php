<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Island extends Model
{
    /** @use HasFactory<\Database\Factories\IslandFactory> */
    use HasFactory;


    // 3. Islands must also be in a separate table. You are not required to make CRUD endpoints for Islands,
    //    but ensure to create the proper database constraints and Laravel Eloquent relationships.
    //    Assessment Criteria
    

    protected $fillable = [
        'name',
        'atoll',
    ];



    public function addresses() {
        return $this->hasMany(Address::class);
    }
}
