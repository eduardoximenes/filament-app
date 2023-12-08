<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'thumbnail',
        'color',
        'slug',
        'categoria_id',
        'content',
        'published',

    ];

    protected $casts = [
        'tags'=> 'array',
    ];

    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }

}
