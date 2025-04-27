<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory; use SoftDeletes;

    protected $fillable = [
        'title',
        'description',
        'price',
        'compare_price',
        'sku',
        'barcode',
        'track_qty',
        'qty',
        'status',
        'category_id',
    ];

    // Relationships
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function productattachments()
    {
        return $this->hasOne(ProductAttachment::class, 'product_id');
    }
}
