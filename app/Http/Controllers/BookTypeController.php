<?php

namespace App\Http\Controllers;

use App\Models\BookType;
use Illuminate\Http\Request;

class BookTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('booktypes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $booktype = new BookType();
        $booktype->type = $request->input('type');

        if($booktype->save()){
            return back()->with('success', 'Your Book Type added successfully.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BookType  $bookType
     * @return \Illuminate\Http\Response
     */
    public function show(BookType $bookType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BookType  $bookType
     * @return \Illuminate\Http\Response
     */
    public function edit(BookType $bookType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BookType  $bookType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BookType $bookType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BookType  $bookType
     * @return \Illuminate\Http\Response
     */
    public function destroy(BookType $bookType)
    {
        //
    }
}
