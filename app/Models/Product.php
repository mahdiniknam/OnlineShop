<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Product extends Model
{

    use HasFactory;

   protected $fillable = ['name', 'description', 'price', 'stock', 'image','category_id'];

   public function showall() {
        return self::all();
    }

}
