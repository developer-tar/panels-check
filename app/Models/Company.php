<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'company_name',
        'email',
        'phone',
        'type',
        'registration_number',
        'website_url',
        'domain_id',
        'status',
        'description',
    ];
    public function media()
    {
        return $this->morphMany(Media::class, 'mediable');
    }
}
