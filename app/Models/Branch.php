<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    // Define the table name (optional if it matches the plural form of the model)
    protected $table = 'branches';

    // Specify the attributes that are mass assignable
    protected $fillable = [
        'name',
        'address',
        'status',
        'contact_number',
        'email',
    ];

    // Add any relationships or custom methods here, if needed
}
