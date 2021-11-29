<?php

namespace App\Http\Controllers\WebFrontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productPage($product_id, $shop_id)
    {
        return "this is products page for ".$product_id." for ".$shop_id;
    }
}