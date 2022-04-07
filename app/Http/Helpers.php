<?php

use App\Models\Category;
use App\Models\Country;
use App\Models\Subcategory;

function getCategories() {
    return Category::all();
}
function getCategoriesSubcategories(){
    return Subcategory::all();
}
function getCountriesCategories() {
    return Country::with('categories')->get();
}