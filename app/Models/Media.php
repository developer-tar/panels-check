<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Media extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'model_name',
        'model_id',
        'path',
        'type',
    ];  

    protected $hidden = [
        'id',
        'updated_at',
        'deleted_at',
        'created_at',
        'type',
        'model_id',
        'model_name',
    ];
}
