<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';
    protected $primaryKey = 'studid';

    public function college()
    {
        return $this->belongsTo(College::class, 'studcollid', 'collid');
    }

    public function program()
    {
        return $this->belongsTo(Program::class, 'studprogid', 'progid');
    }
}
