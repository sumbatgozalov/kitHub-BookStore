<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Language;
class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'id','language'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}

