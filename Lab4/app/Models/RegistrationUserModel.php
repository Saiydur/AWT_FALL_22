<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistrationUserModel extends Model
{
    use HasFactory;
    use HasUuids;

    protected $table = "RegistrationUser";
    protected $timestamp = true;

    protected $fillable = [
        "id",
        "name",
        "email",
        "age",
        "password",
    ];

    protected $hidden = [
        "password"
    ];

    protected $casts = [
        "id" => "string",
        "name" => "string",
        "email" => "string",
        "age" => "integer",
        "password" => "string",
    ];

    
}
