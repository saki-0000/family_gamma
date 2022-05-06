<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileType extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'comment'
    ];

    public function userProfileDetails()
    {
        return $this->hasMany(UserProfileDetail::class);
    }
}
