<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Verse extends Model
{
    use HasFactory;

    protected $table = 'verses';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
        'number',
        'vtext',
        'enabled',
        'author_id',
        'chapter_id',
        'vlang_id',
    ];

    /**
     * Get the author of the verse.
     */
    public function author()
    {
        return $this->belongsTo(Author::class, 'author_id', 'id');
    }

    /**
     * Get the chapter of the verse.
     */
    public function chapter()
    {
        return $this->belongsTo(Chapter::class, 'chapter_id', 'id');
    }

    /**
     * Get the language of the verse.
     */
    public function language()
    {
        return $this->belongsTo(Language::class, 'vlang_id', 'id');
    }
}
