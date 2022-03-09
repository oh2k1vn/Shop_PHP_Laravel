<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    protected $table = 'product';

    protected $fillable = ['id', 'title', 'category_id', 'brand_id', 'desc', 'content', 'price', 'image'];

    public $timestamps = true;
}
