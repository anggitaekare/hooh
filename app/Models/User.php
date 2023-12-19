<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class User extends Model
{
    use HasFactory;

    protected $table = 'users';
    protected $primaryKey = 'id';

    protected $fillable = [
        "name",
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

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    public function user_session()
    {
        return $this->belongsTo(UserSession::class);
    }

    public function createToken()
    {
        $token = str::random(64);

        return $token;
    }
}
