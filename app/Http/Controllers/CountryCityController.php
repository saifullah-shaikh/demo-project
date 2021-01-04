<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Country,State,City};
class CountryCityController extends Controller
{
    //
    public function index()
    {
        
        $data['countries'] = Country::get(["name","id"]);
        return view('Employee.addpage',$data);
    }
    public function getState(Request $request)
    {
        $data['states'] = State::where("country_id",$request->country_id)
                    ->get(["name","id"]);
        return response()->json($data);
    }
    public function getCity(Request $request)
    {
        $data['cities'] = City::where("state_id",$request->state_id)
                    ->get(["name","id"]);
        return response()->json($data);
    }
}
