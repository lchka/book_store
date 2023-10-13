<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();
        return view('books.index',compact('books'));
    }

    public function show($id) 
    {
    $book = Book::find($id);
    return view ('books.show')->with('book',$book);

    }

    public function create()
    {
        return view('books.create');
    }


    public function store(Request $request)
    {
    // $book = new Book();
    // $book->title = $request->input('title');
    // $book->description = $request->input('description');
    // $book->category = $request->input('category');
    // $book->save();

    // return view()->route('books.show', ['id' => $book->$id]);
    }
   


    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
