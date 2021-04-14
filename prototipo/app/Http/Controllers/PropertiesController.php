<?php

namespace LaraDev\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PropertiesController extends Controller
{
    public function index()
    {
        $propertys = DB::select('SELECT * FROM properties');
        return view('property/index')->with('propertys', $propertys);
    }

    public function create()
    {
        return view('property/create');
    }

    public function store(Request $request)
    {
        $property = [
            $request->title,
            $request->sale_price,
            $request->rental_price,
            $request->description
        ];

        DB::insert('INSERT INTO properties (title, sale_price, rental_price, description) VALUES (?, ?, ?, ?)', $property);

        return redirect()->action('PropertiesController@index');
    }
}
