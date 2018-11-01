<?php

function formattedPrice($price) {
    return money_format('%i €', $price / 100);
}
