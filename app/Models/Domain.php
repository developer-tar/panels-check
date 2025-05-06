<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Domain extends Model
{
    protected $fillable = [
        'name',
        'description',
    ];
}
