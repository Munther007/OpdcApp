<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Models\Book;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;
use App\Traits\uploadFileTrait;

class BookController extends Controller
{
    use uploadFileTrait;
    /**
     * Display a listing of the resource.
     *
     * @return Factory|View
     */
    public function index()
    {
        $books = Book::all();
        return view('books.index' , compact([ 'books']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Factory|View
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Factory|View
     */
    public function store(Request $request)
    {
        $random_code = Str::random(10);

        $book = Book::create([
            'title' => $request->title,
            'number' => $request->number,
            'date' => $request->date,
            'file' => $this->uploadFile($request, 'books'),
            'random_code' => $random_code
        ]);

        $book->save();
        return view('books.book' , compact('book'));
    }

    /**
     * Display the specified resource.
     *
     * @param Book $book
     * @return Factory|View
     */
    public function show($id)
    {
        $book = Book::findOrFail($id);
        return view('books.book' , compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Book $book
     * @return Factory|View
     */
    public function edit(Book $book)
    {
       return view('books.edit' , compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Book $book
     * @return RedirectResponse
     */
    public function update(Request $request, Book $book)
    {
        $book->update([
            'title' => $request->title,
            'number' => $request->number,
            'date' => $request->date,
            'file' => $this->uploadFile($request, 'books'),
        ]);
        $book->save();
        return redirect(route('books.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Book $book
     * @return RedirectResponse
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return back();
    }
}
