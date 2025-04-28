<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class BidangKeahlian extends Model
{
    use SoftDeletes;
    protected $table = 'bidang_keahlian';

    public function dosen(): BelongsToMany
    {
        return $this->belongsToMany(Dosen::class);
    }
}
