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
function findCategory($id){
    return Category::find($id);
}

function randomCountry($length){
    $digits = array();
    $numbers = range(1,4);
    shuffle($numbers);
    for($i = 0; $i < $length; $i++){
       	array_push($digits,$numbers[$i]);
    }
    return $digits;
}