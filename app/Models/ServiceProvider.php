<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceProvider extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function experience()
    {
        return $this->hasMany(Experience::class);
    }

    public function commentaryProvider()
    {
        return $this->hasMany(CommentaryProvider::class);
    }

    public function announcement()
    {
        return $this->hasMany(Announcement::class);
    }
}
