<?php

namespace LaraDev\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use LaraDev\Property;

class PropertiesController extends Controller
{
    public function index()
    {
        //$propertys = DB::select('SELECT * FROM properties');
        $propertys = Property::all();

        return view('property/index')->with('propertys', $propertys);
    }

    public function show($name)
    {
        //$property = DB::select('SELECT * FROM properties WHERE name = ?', [$name]);
        $property = Property::where('name', $name)->get();

        if (empty($property)) {

            return redirect()->action('PropertiesController@index');
        } else {

            return view('property/show')->with('property', $property);
        }
    }

    public function create()
    {
        return view('property/create');
    }

    public function store(Request $request)
    {
        $propertSlug = $this->setName($request->title);

        $property = [
            $request->title,
            $propertSlug,
            $request->sale_price,
            $request->rental_price,
            $request->description
        ];

        DB::insert('INSERT INTO properties (title, name, sale_price, rental_price, description) VALUES (?, ?, ?, ?, ?)', $property);

        return redirect()->action('PropertiesController@index');
    }

    public function edit($name)
    {
        //$property = DB::select('SELECT * FROM properties WHERE name = ?', [$name]);
        $property = Property::where('name', $name)->get();

        if (empty($property)) {

            return redirect()->action('PropertiesController@index');
        } else {

            return view('property/edit')->with('property', $property);
        }
    }

    public function update(Request $request, $name)
    {
        $propertSlug = $this->setName($request->title);

        $property = [
            $request->title,
            $propertSlug,
            $request->sale_price,
            $request->rental_price,
            $request->description,
            $name
        ];

        DB::update('UPDATE properties SET title = ?, name = ?, sale_price = ?, rental_price = ?, description = ?
                        WHERE name = ?', $property);

        return redirect()->action('PropertiesController@index');
    }

    public function destroy($name)
    {
        //$property = DB::select('SELECT * FROM properties WHERE name = ?', [$name]);
        $property = Property::where('name', $name)->get();

        if (!empty($property)) {

            DB::delete('DELETE FROM properties WHERE name = ?', [$name]);
        }

        return redirect()->action('PropertiesController@index');
    }

    private function setName($name)
    {
        $propertSlug = str_slug($name);

        //$properties = DB::select('SELECT * FROM properties');
        $properties = Property::all();

        $t = 0;
        foreach ($properties as $property) {

            if ($property->title === $name) {

                $t++;
            }
        }

        if ($t > 0) {

            $propertSlug = $propertSlug . '-' . $t;
        }

        return $propertSlug;
    }
}
