<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Address extends Model
{
    /** @use HasFactory<\Database\Factories\AddressFactory> */
    use HasFactory;

    // 2. CRUD addresses. Addresses should not be repeated in the patients table and must have a separate
    //    table with proper relationships in Laravel.

    protected $fillable = [
        'name',
        'island_id',
    ];

    public function patients() {
        return $this->hasMany(Patient::class);
    }

    public function island() {
        return $this->belongsTo(Island::class);
    }

}
