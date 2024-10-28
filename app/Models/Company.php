<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $fillable = ['description',
    'employee_count',
    'timezone',];
    public $timestamps = false;
    protected $primaryKey = 'company_id';

}
