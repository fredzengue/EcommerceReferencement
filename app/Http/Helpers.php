<?php

use App\Models\Category;
use App\Models\Country;

function getCategories() {
    return Category::all();
}
function getCategoriesSubcategories(){
    return Category::all();
}
function getCountriesCategories() {
    return Country::with('categories')->get();
}