<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deductions extends Model
{
    use HasFactory;
    protected $fillable = [
'employee_id',
'description',
'value',];

public function work_sched()
{
    return $this->hasmany(WorkSchedule::class, 'employee_id');
}
public $timestamps = false;
    protected $primaryKey = 'deductions_id';

}
