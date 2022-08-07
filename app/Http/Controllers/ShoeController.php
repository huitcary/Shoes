<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shoe;

class ShoeController extends Controller
{
    public function index(){
      $shoes = Shoe::get();

      return inertia('Shoe',[
        'shoes' => $shoes
      ]);
    }
}