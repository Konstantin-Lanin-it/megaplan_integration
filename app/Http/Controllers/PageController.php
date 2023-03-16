<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return view('index');

    }
    public function contact() {
        return view('contact');

    }
    public function help() {
        return view('help');

    }
    public function create_form() {
        return view('create_form');

    }
    public function about() {
        return view('about');

    }
    public function success() {
        return view('success');

    }
    public function authorization_error() {
        return view('authorization_error');

    }
}
