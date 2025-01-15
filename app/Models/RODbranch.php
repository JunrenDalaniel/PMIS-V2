<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RODbranch extends Model
{
    protected $table = 'rod_branches';

    protected $fillable = [
        'ROD_SERIES',
        'ROD_BRANCHNAME',
        'ROD_ADDRESS',
        'ROD_STATUS',
    ];
     // Define the primary key field
     protected $primaryKey = 'ROD_ID';

     // If the primary key is not an auto-incrementing integer
     public $incrementing = true;
 
     // Specify the primary key data type (if it's not an integer)
     protected $keyType = 'int';
}
