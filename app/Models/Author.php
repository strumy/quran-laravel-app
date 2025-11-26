<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $table = 'authors';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'country',
        'city',
        'translation_source',
        'date_published',
        'enabled',
        'alang',
    ];

    /**
     * Get the language associated with the author.
     */
    public function language()
    {
        // references `id` on the `languages` table via `alang`
        return $this->belongsTo(Language::class, 'alang', 'id');
    }
}
