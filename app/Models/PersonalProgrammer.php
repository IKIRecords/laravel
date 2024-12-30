<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalProgrammer extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'email',
        'expertise', // Tambahkan 'expertise' di sini
        'updated_at',
        'created_at',
    ];
}
