<?php

namespace App\Http\Controllers;

use App\Models\cat;
use Illuminate\Http\Request;

class CatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $catsDB = cat::all();
        return view('cats_home.index', ['cats'=> $catsDB]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $catsDB = cat::all();
        return view('cats_home.create', ['cats'=> $catsDB]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        request()->validate([
            'age' => ['required', 'min:0', 'integer'],
        ]);

        cat::create([
            'name'=> $request->name,
            'age'=> $request->age,
            'breed'=> $request->breed,
            'fav_food'=> $request->food,
        ]);
        return to_route('cats_home.index');
        
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $cat = cat::find($id);
        return view('cats_home.show', ['cat'=> $cat]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($catId)
    {
        $cat = cat::find($catId);
        return view('cats_home.edit', ['cat'=> $cat]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($catId)
    {
        cat::find($catId)->update([
            'name'=> request()->name,
            'age'=> request()->age,
            'fav_food'=> request()->food

        ]);
        return to_route('cats_home.show', $catId);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($catId)
    {
        cat::find($catId)->delete();
        return to_route('cats_home.index');
    }
}
