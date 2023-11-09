<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function attributeValues(): BelongsToMany
    {
        return $this->belongsToMany(AttributeValue::class, 'product_attribute_values');
    }

    public function merchants(): BelongsTo
    {
        return $this->belongsTo(Merchant::class);
    }

    public function gender(): BelongsTo
    {
        return $this->belongsToMany(Gender::class);
    }

    public function discountMenu(): BelongsTo
    {
        return $this->belongsToMany(Menu::class, 'discount_menu_id');
    }

    public function popularMenu(): BelongsTo
    {
        return $this->belongsTo(Menu::class, 'popular_menu_id');
    }

    public function favoriteMenu(): BelongsTo
    {
        return $this->belongsTo(Menu::class, 'favorite_menu_id');
    }
}
