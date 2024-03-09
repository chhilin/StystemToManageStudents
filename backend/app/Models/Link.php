<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    use HasFactory;
    protected $fillable = ['link',];
    public function students(): HasOne
    {
        return $this->hasOne(Media::class, 'id');
    }
}
