<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Book;
class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       return Book::get();
    }

    /**

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Book::create([
            "title" => $request->title,
            "description" => $request->description,
            "author" => $request->author,
            "publisher" => $request->publisher,
            "date_of_issue" => $request->date_of_issue,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Book::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $title = $request->title;
        $description = $request->description;
        $author = $request->author;
        $publisher = $request->description;
        $date_of_issue = $request->date_of_issue;


        $Book = Book::find($id);
        $Book->title = $title;
        $Book->description = $description;
        $Book->author = $author;
        $publisher = $publisher;
        $Book->date_of_issue = $date_of_issue;
        $Book->save();

        return "Data Berhasil di Update";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Book = Book:: find ($id);
        $Book->delete();
        return "Data berhasil di hapus";
    }
}
