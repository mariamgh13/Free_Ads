<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use Illuminate\Http\Request;

class AnnoncesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $annonces = Annonce::get()->all();
        return view('annonce/annonce', compact('annonces'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function create()
    {
        return view('annonce/create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $attributes = request()->validate([
            'title' => 'required',
            'desc' => 'required',
            'picture' => 'required',
            'picture2' => 'nullable',
            'picture3' => 'nullable',
            'price' => 'required',
            'create_by' => 'required'
            ]);
            // var_dump($attributes);
            // die();
            $annonces = Annonce::create($attributes);
            // var_dump("envoi reussi");
            // die();
        return redirect()->route('annonces');
    
}


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($annonce)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Annonce  $annonce
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $annonces = Annonce::findOrFail($id);
        return view ('annonce/edit', compact('annonces'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Annonce  $annonce
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        //
        
        $attributes = request()->validate([
            'title' => 'required',
            'desc' => 'required',
            'picture' => 'required',
            'picture2' => 'nullable',
            'picture3' => 'nullable',
            'price' => 'required'
        ]);
        $annonces = Annonce::findOrFail($id);
        $annonces->update($attributes);
        // var_dump();
        // die();
        return redirect()->route('annonces');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Annonce  $annonce
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $annonces = Annonce::findOrFail($id);
        $annonces->delete();
        return redirect()->route('annonces');
    }
    public function search(Request $request){
        // Get the search value from the request
        $search = $request->input('search');

        // Search in the title and body columns from the posts table
        $annonces = Annonce::query()
            ->where('title', 'LIKE', "%{$search}%")
            ->orWhere('desc', 'LIKE', "%{$search}%")
            ->orWhere('price', 'LIKE', "%{$search}%")
            ->get();

        // Return the search view with the resluts compacted
        return view('annonce/search', compact('annonces'));
    }
}

