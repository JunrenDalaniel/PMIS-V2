<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    // Define the table name (optional if it follows Laravel's conventions)
    protected $table = 'statuses';

    // Specify the fillable fields for mass assignment
    protected $fillable = [
        'status_series',
        'status_name',
        'status_type',
        'status_status',
    ];

    // If you are using a custom primary key like 'status_id'
    protected $primaryKey = 'status_id';

    // Set incrementing if using custom primary key
    public $incrementing = true;  // or false if not auto-incrementing
}
