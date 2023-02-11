<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\DB;
Use Alert;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Response;

class ProductsController extends Controller
{
    
    public function __construct()
    {
        $products = Product::all();
        return Response()->json($products);        
    }

    
}