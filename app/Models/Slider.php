<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Slider extends Model
{
    protected $guarded = ['id'];

    public $timestamps = false;


    public function menus(): BelongsToMany // one to many
    {
        return $this->belongsToMany(Menu::class, 'menu_slider');
    }
}
