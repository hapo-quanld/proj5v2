<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Database\Factories\EmployerFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;

class Employer extends Model
{
    use HasFactory;

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }
}
