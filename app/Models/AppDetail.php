<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'package_name',
        'package_json'
    ];

    protected $casts = [
        'package_json'=>'json'
    ];
}
