<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Users extends Model
{
    use HasFactory;

    protected $table = 'users';
    protected $primaryKey = 'id';

    protected $fillable = [
        "username",
        "email",
        "password",
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

     public function password(): Attribute
    {
        return new Attribute(
            null,
            set: fn ($value) => Hash::make($value)
        );
    }
    
    public function user_session()
    {
        return $this->belongsTo(UserSession::class);
    }
}
