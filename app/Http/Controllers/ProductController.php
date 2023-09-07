<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('products.index');
    }

    public function create(){
        return view('products.create');
    }
    public function saveProduct(){
        return view('products.store');
    }
}
