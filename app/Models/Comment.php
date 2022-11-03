<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory;

    public function commentable(): MorphTo
    {
        return $this->morphTo();
    }

    public function getComments(): MorphMany
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}
