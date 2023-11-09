<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Menu extends Model
{
    protected $guarded = ['id'];

    public $timestamps = false;


    public function parent(): BelongsToMany
    {
        return $this->belongsToMany(Menu::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Menu::class, 'parent_id');
    }

    public function brands(): BelongsToMany
    {
        return $this->belongsToMany(Brand::class, 'menu_brand');
    }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class, 'menu_category');
    }

    public function genders(): BelongsToMany
    {
        return $this->belongsToMany(Gender::class, 'menu_gender');
    }

    public function sliders(): BelongsToMany
    {
        return $this->belongsToMany(Slider::class, 'menu_slider');
    }

    public function getName()
    {
        $locale = app()->getLocale();
        switch ($locale) {
            case 'tm':
                return $this->name;
                break;
            case 'ru':
                return $this->name_ru ?: $this->name;
                break;
            default:
                return $this->name;
        }
    }
}
