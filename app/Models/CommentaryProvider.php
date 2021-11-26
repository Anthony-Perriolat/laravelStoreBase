<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommentaryProvider extends Model
{
    use HasFactory;

    public function serviceProvider()
    {
        return $this->belongsTo(ServiceProvider::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
