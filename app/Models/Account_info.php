<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account_info extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'account',
        'gender',
        'birthday',
        'note',
    ];
    public $timestamps = false;
}
