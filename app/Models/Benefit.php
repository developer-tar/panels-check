<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Benefit extends Model
{
    use SoftDeletes;
    protected $fillable = [
        "user_id",
        "company_id",
        "domain_id",
        'coverage_limit',
        'start_period',
        'end_period',
        'eliegibility_rules',
        'automatice_reminder',
        'customization_notes'
    ];
    public function company(){
        return $this->belongsTo(Company::class);
    }
    public function domain(){
        return $this->belongsTo(Domain::class);
    }
}
