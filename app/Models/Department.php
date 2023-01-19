<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = [
        'department_name',
    ];

    public function employee()
    {
        return $this->belongsToMany(Employee::class);
    }

    use HasFactory;
}
