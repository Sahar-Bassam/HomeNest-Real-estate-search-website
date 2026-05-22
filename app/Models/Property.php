<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Property extends Model
{
    protected $fillable = ['property_name',
    'price',
     'details',
    'category_id'];
    use HasFactory;

    public function Category(){
        return $this->belongsTo(Category::class);
    }
}
