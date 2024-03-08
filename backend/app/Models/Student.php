<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
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
}
