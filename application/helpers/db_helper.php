<?php
//  _h   for helper
/*
 *
 * Get Categories
 */

function get_categories_h(){
    //getting codeigniter instance because we can't do shit with $this->product
    $CI = get_instance();

    $categories = $CI->Product_model->get_categories();

    return $categories;
}

function get_popular_h(){
    $CI = get_instance();

    $populars = $CI->Product_model->get_popular();

    return $populars;
}