<?php

namespace App\Http\Controllers;


use App\Models\Book;
use App\Models\User;

class HomeController extends Controller
{
    private $book;
    private $user;

    public function __construct()
    {
        $this->book = new Book();
        $this->user = new User();
    }

    public function index()
    {
        $books_count = $this->book->count();
        $users_count = $this->user->count();
        $books_sum_price = $this->book->sum('price');
        $books_sum_pages = $this->book->sum('pages');

        $widget = [
            'books' => $books_count,
            'total_price' => $books_sum_price,
            'total_pages' => $books_sum_pages,
            'users' => $users_count,
        ];

        return view('home', compact('widget'));
    }
}
