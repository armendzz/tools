<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QRCode extends Model
{
    use HasFactory;
    use \App\Traits\Uuids;

    protected $fillable = [
        'status',
        'user_id',
        'active',
        'type',
        'content',
        'img_url'
    ];

}
