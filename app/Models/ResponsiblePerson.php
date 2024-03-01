<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ResponsiblePerson extends Model
{
    use HasFactory;

    protected $table = 'responsible_people';

    public function company(): BelongsTo {
        return $this->belongsTo(ResponsiblePerson::class);
    }
}
