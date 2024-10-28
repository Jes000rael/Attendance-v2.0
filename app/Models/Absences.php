<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absences extends Model
{
    use HasFactory;
    protected $fillable = ['employee_id',
    'attendance_id',
   'date',
    'eeason',];

    protected $primaryKey = 'absent_id';
    public $timestamps = false;



    

    
}
