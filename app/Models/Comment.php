<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\belongTo;

class Comment extends Model
{
    protected $fillable = [
        'client_id',
        'name',
        'content',
    ];

    public function client() {
        return $this->belongsTo(Client::class);
    }
}
