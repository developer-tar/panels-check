<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Media extends Model {
    use SoftDeletes;
    /**
     * Get the parent commentable model (post or video).
     */
    public function mediable(){
        return $this->morphTo();
    }
}
