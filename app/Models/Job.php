<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Database\Factories\JobFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Job extends Model
{
    use HasFactory;

    public function tag(string $name){
        $tag = Tag::firstOrCreate(['name'=>$name]);

        $this->tags()->attach($tag);
    }
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    public function employer(): BelongsTo {
        return $this->belongsTo(User::class);
    }
}
