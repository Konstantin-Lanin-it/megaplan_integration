<?php

namespace App\Http\Controllers;

use App\Models\AdressLoginPassword;
use App\Models\Token;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http; //test

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

        //TODO: Предусмотреть возможность ошибок (что если ответа не будет, или ответ будет отличаться от ожидаемого?)
        if (!$response->ok!) {
            //NOTE: Если произошла ошибка, можем ли мы что-то сделать? Есть ли какие-то сценарии работы или оповещения пользователей?
            return view('authorization_error');
        }

        $token = new Token();
        $token->access_token = $responseBody['access_token'];
        $token->refresh_token = $responseBody['refresh_token'];
        $token->save();

        $AdressLoginPassword = new AdressLoginPassword();
        $AdressLoginPassword->address = $request["address"];
        $AdressLoginPassword->login = $request["login"];
        $AdressLoginPassword->password = $request["password"];
        $AdressLoginPassword->save();

        //dd($responseBody); // body response

        return view('success');
    }
}