<?php

namespace App\Http\Controllers;



use App\Models\product;
use App\Models\client;
use App\Models\AdressLoginPassword;
use App\Models\Token;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SaveDBController extends Controller
{
    public function savedb_clients() {
        
        $AdressLoginPassword = DB::table('adress_login_passwords')->latest('created_at')->first();
       // $AdressLoginPassword = DB::table('AdressLoginPassword')->latest('created_at')->first();
        $Token = DB::table('Tokens')->latest('created_at')->first();
        $access_token = $Token->access_token;

        //dd(DB::table('adress_login_passwords')->latest('created_at')->first());
       // $request = Http::get('https://'.'mp57059753.megaplan.ru'.'/api/v3/contractor?{"access_token":'.'"'.'NzA5YTJlNDNmNTg0YWFkZDBmOWRjMTMyMDA0N2NjYTE5M2Q4NWUxNWZmOWU2ZjA5ZGU3NjVkYjljZjZhYTk4Mw'.'"'.'}');
        $request = Http::get('https://'.$AdressLoginPassword->address.'/api/v3/contractor?{"access_token":'.'"'.$access_token.'"'.'}');
       
        dd(json_decode($request->getBody(), true));


        $response = json_decode($request->getBody(), true);

       for ($i = 0; $i < count($response['data']); $i++) {
            if ($response['data'][$i]['contentType'] == 'ContractorHuman'){
                $client = new client();
                $client->firstName = $response['data'][$i]['firstName'];
                $client->middleName = $response['data'][$i]['middleName'];
                $client->lastName = $response['data'][$i]['lastName'];
                $client->phone = $response['data'][$i]['contactInfo'][1]['value'];
                $client->email = $response['data'][$i]['contactInfo'][0]['value'];
                $client->save();
            }
    } 
        return view('savedb');
}


    public function savedb_products() {

        $AdressLoginPassword = DB::table('adress_login_passwords')->latest('created_at')->first();
        $Token = DB::table('Tokens')->latest('created_at')->first();
        $access_token = $Token->access_token;

        //dd($AdressLoginPassword->address);

        $request = Http::get('https://'.$AdressLoginPassword->address.'/api/v3/offer?{"access_token":'.'"'.$access_token.'"'.'}');
        
        $response = json_decode($request->getBody(), true);
            

        for ($i = 0; $i < count($response['data']); $i++) {
            if ($response['data'][$i]['contentType'] == 'Offer'){
                $product = new product();
                $product->name = $response['data'][$i]['name'];
                $product->quantity = $response['data'][$i]['quantity'];
                $product->price = $response['data'][$i]['price']['valueInMain'];
                $product->currency = $response['data'][$i]['price']['currency'];
                if (count($response['data'][$i]['unit'])==3){
                    $product->unit = $response['data'][$i]['unit']['name'];
                }
                $product->save();
            }
        } 
        return view('savedb');

       // /api/v3/deal     сделки 



        //@dd ($response);








       // echo $response["data"][0]['name'];
        //return view('savedb');

    }
}







