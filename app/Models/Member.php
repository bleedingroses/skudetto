<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Member extends Model
{
    use HasFactory, Sortable;

    protected $guarded = ['id'];

    public $sortable = [
        'nama', 'jurusan', 'pendidikan',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
