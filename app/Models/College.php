<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    protected $table = 'colleges';
    protected $primaryKey = 'collid';

    public function students()
    {
        return $this->hasMany(Student::class, 'studcollid', 'collid');
    }

    public function departments()
    {
        return $this->hasMany(Department::class, 'deptcollid', 'collid');
    }

    public function programs()
    {
        return $this->hasMany(Program::class, 'progcollid', 'collid');
    }
}

