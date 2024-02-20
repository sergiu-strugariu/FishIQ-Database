<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Stand extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $fillable = [
        'nume',
        'created_by',
        'lac_id',
    ];

    public function lacs(): BelongsToMany
    {
        return $this->belongsToMany(Lac::class, 'lac_id');
    }

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function lacName()
    {
        return $this->belongsTo(Lac::class, 'lac_id');
    }
}
