<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class informationType extends Model
{
    use HasFactory;

    public function userInformationDetails()
    {
        return $this->hasMany(UserInformationDetail::class);
    }
}
