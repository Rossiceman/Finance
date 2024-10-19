<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class member extends Model
{
    public $timestamps = false;
    protected $table = "members";
    protected $primaryKey = "id";
    protected $fillable = [
        "id",
        "Username",
        "Password",
        "Email",
        "Uid",
        "Created_at",
        "State",
        "Level",
    ];
};
