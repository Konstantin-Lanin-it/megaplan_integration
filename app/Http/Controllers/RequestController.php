<?php

namespace App\Http\Controllers;


use App\Models\AdressLoginPassword;
use App\Models\Token;
use App\Jobs\RequestClientMegaplanJob;

use Illuminate\Http\Request;
use App\Http\Requests\FormNewRequest;

use Illuminate\Support\Facades\Http; //test
use Illuminate\Support\Facades\DB;

use Illuminate\Support\MessageBag;

class RequestController extends Controller
{
    public function request(Request $request) {
        $headers = [
            "content-type: multipart/form-data;"
        ];

        $url = 'https://'. $request["address"] .'/api/v3/auth/access_token';
        
        $payload = [
            'username' => $request["login"],
            'password' => $request["password"],
            'grant_type' => "password"
        ];

        $response = Http::withHeaders($headers)->post($url, $payload);
        $responseBody = json_decode($response->getBody(), true);


        //dd($responseBody); // body response

        if (in_array("bearer", $responseBody)) {

            $token = new Token();
            $token->access_token = $responseBody['access_token'];
            $token->refresh_token = $responseBody['refresh_token'];
            $token->save();
        
            $AdressLoginPassword = new AdressLoginPassword();
            $AdressLoginPassword->address = $request["address"];
            $AdressLoginPassword->login = $request["login"];
            $AdressLoginPassword->password = $request["password"];
            $AdressLoginPassword->save();
            
            return view('success');
        } else {
            return view('authorization_error');
          }
    }


    public function custom_request(FormNewRequest $request){
       
        
        //dd($request->all());

        $AdressLoginPassword = DB::table('adress_login_passwords')->latest('created_at')->first();
        $Token = DB::table('Tokens')->latest('created_at')->first();
        $access_token = $Token->access_token;

        $headers = [
            "Authorization" => "Bearer ".$access_token
        ];

        $url = "https://".$AdressLoginPassword->address."/api/v3/contractorHuman";
        
        $payload = [
               "contentType" => "ContractorHuman",
                "firstName" => $request["firstName"],
                "middleName" => $request["middleName"],
                "lastName" => $request["lastName"],
                "contactInfo" => [
                                [
                                    "contentType" => "ContactInfo",
                                    "type" => "email",
                                    "value" => $request["Email"],
                                    "comment" => null,
                                    "isMain" => true
                                ],
                                [
                                    "contentType" => "ContactInfo",
                                    "type" => "phone",
                                    "value" => $request["phone"],
                                    "comment" => null,
                                    "isMain" => true
                                ]
                                ]
                                ];
                                
        RequestClientMegaplanJob::dispatch($headers, $url, $payload);
        return view('success');
      }


       // $response = Http::withHeaders($headers)->post($url, $payload);
       // $responseBody = json_decode($response->getBody(), true);


      //  dd(json_decode($response->getBody(), true)); // body response
       // if ($responseBody["meta"]["status"] == 200) {
      //      return view('success');
      //  } else {
      //      return view('authorization_error');
      //    }
    


    
}

/*[
    'username' => $request["login"],
    'password' => $request["password"],
    'grant_type' => "password"
    
*/