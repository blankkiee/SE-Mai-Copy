<?php

// app/Models/Pending.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pending extends Model
{
    protected $table = 'pending'; // Specify the table name if it's different
   protected $fillable = ['name', 'year', 'course', 'phone', 'gwa', 'parents_income'];

}
