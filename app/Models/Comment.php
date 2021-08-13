<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;
use App\Models\User;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'comment',
        'post_id',
        'user_id'
    ];

    public function postcomments()
    {
        return $this->belongsTo(Post::class);
    }

    public function usercomments()
    {
        return $this->belongsTo(User::class);
    }
}
