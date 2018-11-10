<?php

function formattedPrice($price) {
    return money_format('%i €', $price / 100);
}

function isActiveCategory($category, $output = 'active') {
    return request()->categorie == $category ? $output : '';
}
