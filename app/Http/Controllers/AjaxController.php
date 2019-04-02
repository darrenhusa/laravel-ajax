<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RoomCategory;
use App\Room;

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

  public function load_available_rooms(Request $request)
  {
      // display start_date, end_date, and room Category
      $input = [
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'category' => $request->category
          ];
      // dd($input);

      // insert query to lookup available rooms.
      $qry = Room::select('reservations.room_no as reservationsRoom', 'start_date', 'end_date',
              'rooms.room_no as roomsRoom', 'category', 'unavailable')
         ->leftJoin('reservations', function ($join) use ($input) {
                   $join->on('rooms.room_no', '=', 'reservations.room_no');
                 });
                   // $join->where([
                   //   ['start_date', '<=', $input['start_date']],
                   //   ['end_date', '>=', $input['end_date']],
                   // ]);
                   // $join->OrWhere([
                   //   ['start_date', '>=', $input['start_date']],
                   //   ['start_date', '<=', $input['end_date']],
                   //   ['end_date', '>=', $input['end_date']],
                   // ]);
                   // $join->OrWhere([
                   //   ['start_date', '<=', $input['start_date']],
                   //   ['end_date', '>=', $input['start_date']],
                   //   ['end_date', '<=', $input['end_date']],
                   // ]);

        dd($qry);
        return $rooms;
        // return response()->json(['success'=>'Data is successfully added']);
  }
}
