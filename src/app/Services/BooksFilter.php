<?php


namespace App\Services;


use App\BookModel;
use App\Http\Requests\BookFilterRequest;
use Illuminate\Support\Facades\DB;

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
                if($value)
                {
                    $this->$filter($value);
                };
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
        $this->books->where('year', '=', $value);
    }
    public function author($value)
    {
        $this->books->whereAuthorId($value);
    }
    public function publisher($value)
    {
        $this->books->wherePublisherId($value);
    }
    public function owner($value)
    {
       $this->books->
       leftJoin('publishers', 'books.publisher_id', '=', 'publishers.id')->
       whereOwnerId($value);
    }
    public function filters()
    {
        return $this->request->all();
    }
}
