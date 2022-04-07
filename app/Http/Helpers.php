<?php

use App\Models\Category;
use App\Models\Country;

function getCategories() {
    return Category::all();
}
function getCategoriesSubcategories(){
    return Category::with('subcategories')->get();
}
function getCountriesCategories() {
    return Country::with('categories')->get();
}