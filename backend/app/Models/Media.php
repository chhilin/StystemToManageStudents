<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;
    protected $fillable = ['image',];
    // one media has one student image 
    public function students(): HasOne
    {
        return $this->hasOne(Media::class, 'id', 'media_id');
    }
}

