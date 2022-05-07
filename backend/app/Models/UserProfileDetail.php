<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfileDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'value',
        'profile_type_id',
        'comment',
    ];
    protected $appends = [];
    protected $visible = ['id', 'value', 'comment'];
}
