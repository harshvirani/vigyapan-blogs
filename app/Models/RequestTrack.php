<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestTrack extends Model
{
    use HasFactory;

    protected $fillable = [
        "route",
        "request_data",
        "user_id",
        "ip",
        "country",
        "country_code",
        "region",
        "region_name",
        "city",
        "zip",
        "lat",
        "long",
        "timezone",
        "isp",
        "org",
        "as",
        "status",
    ];

    protected $casts = [
        'request_data'=>'json'
    ];
}
