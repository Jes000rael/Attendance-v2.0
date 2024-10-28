<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttendanceRecord extends Model
{
    use HasFactory;
    protected $fillable = [ 'employee_id',
    'cutoff_id',
    'total_hours',
    'total_break',
    'total_ot',
    'rate',
    'date',
   'duty_start',
    'time_in',
    'time_out',
    'status',
    'has_night_diff',];
    public $timestamps = false;
    protected $primaryKey = 'attendance_id';



   
}
