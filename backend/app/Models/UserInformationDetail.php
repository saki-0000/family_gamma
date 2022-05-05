<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInformationDetail extends Model
{
    use HasFactory;

    protected $appends = [];
    protected $visible = ['id', 'value', 'comment'];
}
