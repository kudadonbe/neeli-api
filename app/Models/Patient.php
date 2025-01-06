<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    /** @use HasFactory<\Database\Factories\PatientFactory> */
    use HasFactory;

//      1. Create, Read (list and show), Update and Delete (CRUD) patients. Include the following fields:
//         Name, Date of Birth (DOB), National ID, and Address.
//      

    protected $fillable = [
        'national_id',
        'name',
        'dob',
        ];

}
