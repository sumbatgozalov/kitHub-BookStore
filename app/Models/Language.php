<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
class Language extends Model
{
    use HasFactory;
    protected $table = 'languages';
    public function product()
    {
        return $this->hasOne(Product::class);
    }
}
