<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];



    // Relacion uno a mucho inversa
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }


    // Relacion muchos a muchos

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }


    // Relacion uno a uno polimorfica

    public function image(): MorphOne
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
