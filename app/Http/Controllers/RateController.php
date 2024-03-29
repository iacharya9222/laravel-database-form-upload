<?php

namespace App\Http\Controllers;

use App\Models\PriceRange;
use Illuminate\Http\Request;

class RateController extends Controller
{
    public function register(Request $request)  {
        $incommingFields = $request->validate([
            'rate1'=>'required',
            'rate2'=>'required',
            'rate3'=>'required',
            'rate4'=>'required'
        ]);
        PriceRange::create($incommingFields);
        return 'hello form register';
        
    }
    public function showForm()
    {
        $priceRange = PriceRange::latest()->first(); // Fetch the first row from the price_rage table
        return view('viewrange', compact('priceRange'));
    }
}
