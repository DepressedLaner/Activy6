<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function indexProduct(){
        return view ('products/productView');
    }

    public function editProduct(){
        return view ('products/productEditing');
    }

    public function createProduct(){
        return view ('products/productCreation');
    }






}
