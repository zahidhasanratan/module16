<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaleController extends Controller
{
   function salePage(){
       return view('pages.dashboard.sale-page');
   }
}
