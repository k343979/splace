<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\hasMany;

class Client extends Model
{
    protected $fillable = [
        'name',
        'thumbnail',
        'email',
        'number',
        'address',
        'phrase',
        'tag',
        'price',
        'content',
    ];

    // リレーション：複数のimageを持つ。重複するimage_idが存在する。
    public function images() {
        return $this->hasMany(Image::class);
    }

    // リレーション：複数のコメントを持つ。重複するclient_idが存在する。
    public function comments() {
        return $this->hasMany(Comment::class);
    }
}
