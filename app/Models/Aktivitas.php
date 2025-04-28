<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Aktivitas extends Model
{
    use SoftDeletes;
    protected $table = 'aktivitas';

    public function research_group(): BelongsTo
    {
        return $this->belongsTo(ResearchGroup::class);
    }
}
