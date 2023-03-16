<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\client;
use Illuminate\Support\Facades\Cache;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;


class ExtractFromDBController extends Controller
{
    public function orders() {
        return view('orders');

    }

    public function extract_clients() {
        $client = Cache::remember('client', 180, function(){
            return client::all();
          });
          return view('extract_clients', ['client' => $client-> all()]);
    }
    

    public function extract_products_expensive_or_cheap(Request $request) {
      // dd($request->get('parametr'));
      $param = ($request->all());
       if ($request->get("parametr") == ""){
             $product = Cache::remember("products", 180, function(){
               return product::all();
               });
       }elseif ($request->get("parametr") == "expensive") {
            $product = Cache::remember("products_expensive", 180, function(){
                return DB::table("products")
                ->orderBy("price", "desc")
                ->get();
              });
        }elseif($request->get("parametr") == "cheap"){
            $product = Cache::remember("products_cheap", 180, function(){
                return DB::table("products")
                ->orderBy("price", "asc")
                ->get();
              });
        }
       // dd($product-> all());
        return view("extract_products_expensive_or_cheap", ["product" => $product-> all()]);
    }
    
}