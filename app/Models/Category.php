<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function member()
    {
        return $this->hasMany(Member::class);
    }

    public function tahsin()
    {
        return $this->hasMany(Tahsin::class);
    }
}
