<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function countries()
    {
        return $this->belongsToMany('App\models\Country');
    }
    public function subcategories()
    {
        return $this->hasMany('App\models\Subcategory');
    }

}
