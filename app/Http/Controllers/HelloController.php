<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
  public function index(){
    $title = 'PHP Programming with Laravel Framework';
    $subtitle = 'Welcome to Laravel 5';
    return view('hello.index')
    ->withTitle($title)
    ->withSubtitle($subtitle);
  }
}
