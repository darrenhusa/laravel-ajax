<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RoomCategory;

class AjaxController extends Controller
{
  public function get_categories()
  {
        // dd($request);
        // return ['Economy', 'Deluxe', 'Suite'];
        $categories = RoomCategory::all()
          ->pluck('category')
          ->toArray();

        // dd($categories);

        // return ['Economy', 'Deluxe', 'Suite'];
        // $data = [
        //   'categories' => $categories,
        //   'success'=>'Rooms successfully retrieved'
        // ];

        return $categories;
        // return response()->json($data);
  }

  public function get_available_rooms()
  {
        return [102, 103, 104, 105, 106, 107, 108, 109, 110];

        // return response()->json(['success'=>'Data is successfully added']);
  }
}
