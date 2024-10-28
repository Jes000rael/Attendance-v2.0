<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MeritLog extends Model
{
    use HasFactory;
    protected $fillable = [  'employee_id',
    'employee_id_from',
    'merit_category_id',
    'merit_type_id',
    'reasons',
    'points',
    'date',];
    public $timestamps = false;
    protected $primaryKey = 'merit_id';



  
}
