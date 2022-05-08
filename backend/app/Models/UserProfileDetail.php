<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
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
    protected $appends = ['profile_type_name'];
    protected $visible = ['id', 'value', 'comment', 'profile_type_name'];

    public function profileType()
    {
        return $this->belongsTo(ProfileType::class);
    }

    protected function profileTypeName(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->profileType->name,
        );
    }
}
