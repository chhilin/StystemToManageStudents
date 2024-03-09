<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'student_name',
        'stories_id',
        'media_id',
        'social_id',
        'link_id',
        'comment_id'
    ];
    // one student has one media image 
    public function media(): HasOne
    {
        return $this->hasOne(Media::class, 'media_id', 'id');
    }
    public function story(): HasOne
    {
        return $this->hasOne(Story::class,'id');
    }
    public function comment(): HasOne
    {
        return $this->hasOne(Comment::class,'id');
    }
    public function social(): HasOne
    {
        return $this->hasOne(SocialNetwork::class,'id');
    }
    public function link(): HasOne
    {
        return $this->hasOne(Link::class,'id');
    }
}
