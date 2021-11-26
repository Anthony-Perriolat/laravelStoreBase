<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryAnnouncement extends Model
{
    use HasFactory;

    public function announcement()
    {
        return $this->hasMany(Announcement::class);
    }
}
