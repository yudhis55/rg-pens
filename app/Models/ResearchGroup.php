<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class ResearchGroup extends Model
{
    use SoftDeletes;
    protected $table = 'research_group';

    public function prodi(): BelongsTo
    {
        return $this->belongsTo(Prodi::class);
    }

    public function departemen(): BelongsTo
    {
        return $this->belongsTo(Departemen::class);
    }

    public function produk(): HasMany
    {
        return $this->hasMany(Produk::class);
    }

    public function aktivitas(): HasMany
    {
        return $this->hasMany(Aktivitas::class);
    }

    public function dosen(): HasMany
    {
        return $this->hasMany(Dosen::class);
    }
}
