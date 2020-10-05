<?php

namespace App\Http\Controllers\Book;

use App\Http\Controllers\Controller;
use App\Http\Requests\BookRequest;

use App\Models\User;
use App\Models\Book;

class BookController extends Controller
{
    private $user;
    private $book;
    public function __construct()
    {
        $this->user = new User();
        $this->book = new Book();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = $this->book->all();
        return view('/book/book-list', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = $this->user->all();
        return view('/book/book-create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookRequest $request)
    {
        $cadastro = $this->book->create([
            'title' => $request->title,
            'user_id' => $request->user_id,
            'pages' => $request->pages,
            'price' => $request->price
        ]);
        if ($cadastro)
        {
            return redirect('/books')
                ->with('message', 'Livro cadastrado com sucesso!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = $this->book->find($id);
        return view('book/book-view',compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = $this->book->find($id);
        $users = $this->user->all();
        return view('book/book-create', compact('book', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BookRequest $request, $id)
    {
        $this->book->where(['id' => $id])->update([
            'title' => $request->title,
            'user_id' => $request->user_id,
            'pages' => $request->pages,
            'price' => $request->price
        ]);
        return redirect('/books')
            ->with('message', 'Livro alterado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // delete
        $book = $this->book->find($id);
        $del = $book->delete();

        if ($del)
        {
            return response()->json([
                'message' => 'Livro deletado com sucesso!'
            ]);
        }
    }
}
