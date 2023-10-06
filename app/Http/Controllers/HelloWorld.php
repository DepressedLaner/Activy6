<?php 
namespace App\Http\Controllers; 
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Auth; 
use App\Models\Hello; // Very important to import the model here

class HelloWorld extends Controller 
{ 
  public function sayHello() 
  { 
    return view('hello', ["message" => Hello::helloWorldMessage()]); 
  } 
} 