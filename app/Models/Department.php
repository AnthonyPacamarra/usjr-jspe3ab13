<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $fillable = ['deptfullname', 'deptshortname'];

    public function colleges()
    {
        return $this->belongsToMany(College::class);
    }

    public function programs()
    {
        return $this->hasMany(Program::class);
    }
}
