<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patients extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'first_name',
        'second_name',
        'last_name',
        'gender',
        'birth_date',
        'die_date'
    ];



}
