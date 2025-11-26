<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    use HasFactory;

    // Table name (optional since Laravel infers it from the class name)
    protected $table = 'chapters';

    // Primary key (optional, Laravel handles 'id' by default)
    protected $primaryKey = 'id';

    // Disable timestamps if not included in migration
    public $timestamps = false;

    // Fields that are mass assignable
    protected $fillable = [
        'number',
        'english_name',
        'arabic_name',
        'transliteration',
        'total_verses',
        'enabled',
    ];

    /**
     * Get the verses for the chapter.
     */
    public function verses()
    {
        return $this->hasMany(Verse::class, 'chapter_id', 'id');
    }
}
