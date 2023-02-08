<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Book;
use Mail;

use App\Models\RequestBook;

class ReuqestBookController extends Controller
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
    public function create(Request $request)
    {
        $id = $request->book;

        $book = Book::where('id',$id)->first();
        return view('requests.create',compact('book'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $requestbook = new RequestBook();
        $requestbook->name = $request->input('name');
        $requestbook->email = $request->input('email');
        $requestbook->contact_number = $request->input('contact_number');
        $requestbook->book_id = $request->input('id');

        if($requestbook->save()){
            Mail::to($requestbook->email)->send(new \App\Mail\BookRequestCreated($requestbook));
            return back()->with('success', 'Your request is successfully.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RequestBook  $requestBook
     * @return \Illuminate\Http\Response
     */
    public function show(RequestBook $requestBook)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RequestBook  $requestBook
     * @return \Illuminate\Http\Response
     */
    public function edit(RequestBook $requestBook)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RequestBook  $requestBook
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RequestBook $requestBook)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RequestBook  $requestBook
     * @return \Illuminate\Http\Response
     */
    public function destroy(RequestBook $requestBook)
    {
        //
    }
}
