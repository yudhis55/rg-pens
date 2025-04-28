<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Departemen extends Model
{
    use SoftDeletes;
    protected $table = 'departemen';

    public function prodi(): HasMany
    {
        return $this->hasMany(Prodi::class);
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
