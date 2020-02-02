<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Carbon;

class BookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    static public function nowYear()
    {
        return Carbon::now()->year;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        return [
            'name' => 'required|max:200',
            'year' => "required|integer|min:1800|max:{$this->nowYear()}",
            'publisher_id' => 'required|exists:publishers,id',
            'author_id' => 'required|exists:authors,id'
        ];
    }

    public function getName()
    {
        return $this->get('name');
    }

    public function getYear()
    {
        return $this->get('year');
    }

    public function getPublisherId()
    {
        return $this->get('publisher_id');
    }

    public function getAuthorId()
    {
        return $this->get('author_id');
    }
}
