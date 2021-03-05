<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClientModel extends Model
{
    protected $table = "clients";
    protected $fillable = [
        'id',
        'fio',
        'email',
        'phone',
        'created_at',
        'updated_at'
    ];
}