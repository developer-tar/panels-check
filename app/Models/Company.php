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
        'description',
        'status'
    ];
  
  
    public function domain()
    {
        return $this->belongsTo(Domain::class);
    }
    public function media()
    {
        return $this->hasMany(Media::class, 'model_id')->where('model_name', Company::class);
    }
   
}
