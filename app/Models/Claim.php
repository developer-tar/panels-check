<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Claim extends Model
{
    protected $fillable = [
        'company_id',
        'user_id',
        'domain_id',
        'claim_amount_required',
        'reason_for_takng_the_benefit',
        'status',

    ];
    public function media()
    {
        return $this->hasMany(Media::class, 'model_id')->where('model_name', Claim::class, 'folder_name' , 'claim_verify');
    }
}
