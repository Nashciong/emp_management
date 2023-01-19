<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'age',
        'address',
        'email'
    ];

    public function salary()
    {
        return $this->hasOne(Salary::class);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function department()
    {
        return $this->belongsToMany(Department::class)->withPivot('total_employee','sub_total_employee');
    }

    use HasFactory;
}
