<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class MPert4 extends Model
{
    protected $fillable = [
        'name',
        'email',
        'age',
    ];
}
