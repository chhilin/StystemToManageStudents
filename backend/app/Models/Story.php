<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    use HasFactory;
    protected $fillable = ['story_title',];
    public function students(): HasOne
    {
        return $this->hasOne(Media::class, 'id', 'stories_id');
    }
}
