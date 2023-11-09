<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Attribute extends Model
{
    protected $guarded = ['id'];

    public $timestamps = false;


    public function attributeValues(): HasMany // one to many
    {
        return $this->hasMany(AttributeValue::class)
            ->orderBy('sort_order')
            ->orderBy('name')
            ->orderBy('name_ru')->nullable();
    }
}
