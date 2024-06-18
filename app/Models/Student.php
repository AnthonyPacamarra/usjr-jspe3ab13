<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = ['progfullname', 'progshortname'];

    public function colleges()
    {
        return $this->belongsTo(College::class);
    }
}
