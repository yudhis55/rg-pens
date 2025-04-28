<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Prodi extends Model
{
    use SoftDeletes;
    protected $table = 'prodi';

    public function departemen(): BelongsTo
    {
        return $this->belongsTo(Departemen::class);
    }

    public function research_group(): HasMany
    {
        return $this->hasMany(ResearchGroup::class);
    }
    public function dosen(): HasMany
    {
        return $this->hasMany(Dosen::class);
    }
}
