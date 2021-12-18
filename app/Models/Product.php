<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function serviceProvider()
    {
        return $this->belongsTo(ServiceProvider::class);
    }

    public function categoryAnnouncement()
    {
        return $this->belongsTo(CategoryAnnouncement::class);
    }
}
