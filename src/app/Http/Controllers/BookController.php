<?php

namespace App\Http\Controllers;

use App\AuthorModel;
use App\BookModel;
use App\Http\Requests\BookFilterRequest;
use App\Http\Requests\BookRequest;
use App\PublisherModel;
use App\Services\BooksFilter;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Symfony\Component\DomCrawler\Crawler;

class BookController extends Controller
{
    protected function store()
    {
        $books = BookModel::paginate(20);

        return view('layouts.store', compact('books'));
    }

    protected function addBook()
    {
        $publishers = PublisherModel::all();
        $authors = AuthorModel::all();

        return view('layouts.addBook',
            ['publishers' => $publishers,
             'authors'    => $authors]);
    }

    protected function create(BookRequest $request)
    {
        $book = app(BookModel::class);
        $book->name = $request->getName();
        $book->year = $request->getYear();
        $book->author_id = $request->getAuthorId();
        $book->publisher_id = $request->getPublisherId();
        $book->save();

        $this->store();
    }

    protected function filterForm()
    {
        $publishers = PublisherModel::all();
        $authors = AuthorModel::all();

        return view('layouts.filter',
            ['publishers' => $publishers,
             'authors'    => $authors]);
    }

    protected function filter(BookFilterRequest $request)
    {
        $books = BookModel::with('author', 'publisher');
        $books = (new BooksFilter($books, $request))->apply();
        $books = $books->paginate(20);

        return view('layouts.store', compact('books'));
    }
}
