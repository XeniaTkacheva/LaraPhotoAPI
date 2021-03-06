<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'author_id',
        'preview',
        'description',
    ];

    /**
     *  Get the photos for the album.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function photos()
    {
        return $this->HasMany('App\Models\Photo');
    }

    /**
     * Get the author that owns the album.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function author()
    {
        return $this->belongsTo('App\Models\User', 'author_id');
    }
}
