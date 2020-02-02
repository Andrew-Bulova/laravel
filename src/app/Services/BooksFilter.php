<?php


namespace App\Services;


use App\BookModel;
use App\Http\Requests\BookFilterRequest;

class BooksFilter
{
    protected $books;
    protected $request;

    public function __construct($books,$request)
    {
        $this->books = $books;
        $this->request = $request;
    }

    public function apply()
    {
        foreach ($this->filters() as $filter=>$value) {
            if (method_exists($this,$filter)){
                $this->$filter($value);
            };
        }

        return $this->books;
    }

    public function name($value)
    {
        $this->books->where('name', 'like', "%$value%");
    }

    public function year($value)
    {
        $this->books->where('year', 'like', "%$value%");
    }
    public function author($value)
    {
        $this->books->where('author', 'like', "%$value%");
    }
    public function publisher($value)
    {
        $this->books->where('publisher', 'like', "%$value%");
    }
    public function filters()
    {
        return $this->request->all();
    }
}
