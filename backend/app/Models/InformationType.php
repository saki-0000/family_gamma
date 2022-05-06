<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformationType extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'comment'
    ];

    public function userInformationDetails()
    {
        return $this->hasMany(UserInformationDetail::class);
    }
}
