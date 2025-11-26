<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    use HasFactory;

    protected $table = 'languages';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'iso_code',
        'direction',
        'enabled',
    ];

    /**
     * Get the authors for this language.
     */
    public function authors()
    {
        return $this->hasMany(Author::class, 'alang', 'id');
    }
}
