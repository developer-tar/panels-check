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
    public function company()
    {
        return $this->hasMany(Company::class, 'domain_id');
    }
    public function benefit()
    {
        return $this->hasMany(Benefit::class, 'domain_id');
    }
    public function claim()
    {
        return $this->hasMany(Claim::class, 'domain_id');
    }
}
