<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    protected $table = 'sessions';
    protected $primaryKey = 'id';
    protected $fillable = ['session', 'status'];
    protected $casts = ['status' => 'boolean'];
}