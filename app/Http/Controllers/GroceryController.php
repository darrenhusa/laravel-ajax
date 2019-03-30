<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Grocery;

class GroceryController extends Controller
{

  public function store(Request $request)
  {
        // dd($request);

        $grocery = new Grocery();
        $grocery->name = $request->name;
        $grocery->type = $request->type;
        $grocery->price = $request->price;

        $grocery->save();

        // dd($grocery);

        return response()->json(['success'=>'Data is successfully added']);
  }
}
