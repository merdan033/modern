<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Gender extends Model
{
    protected $guarded = ['id'];

    public $timestamps = false;


    public function products(): HasMany // one to many
    {
        return $this->hasMany(Product::class);
    }

    public function menu(): BelongsToMany
    {
        return $this->belongsToMany(Menu::class, 'menu_gender');
    }
}
