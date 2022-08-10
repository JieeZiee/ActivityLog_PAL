<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    use HasFactory;
    protected $fillable = [
        'karyawan',
        'divisi',
        'aktivitas',

    ];
    public static function index()
    {
        return Activity::all();
    }
}
