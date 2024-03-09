<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialNetwork extends Model
{
    use HasFactory;
    protected $fillable = ['social_network',];
    public function students(): HasOne
    {
        return $this->hasOne(Media::class, 'id');
    }
}
