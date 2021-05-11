<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function all()
    {
        return Products::all();
    }

    public function productByID($id)
    {
        return Products::where("product_id", $id)->with('phoneInformation', 'color', "images")->get();
    }

    public function filterProduct($filter)
    {
        $product = null;

        switch(Str::lower($filter)){
            case "low":
                $product = Products::orderBy('price', "asc")->get();
                break;

            case "high":
                $product = Products::orderBy('price', "desc")->get();
                break;

            case "rating":
                $product = Products::orderBy('rate', "desc")->get();
                break;

            default:
                $product = Products::all();

        }

        if (!empty($product)){
            return $product;
        }

    }

}
