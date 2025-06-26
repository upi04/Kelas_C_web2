<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class apika_student extends Model
{
    use HasFactory;
    protected $table = 'student';
    protected $fillable = ['name', 'email', 'age'];
}
