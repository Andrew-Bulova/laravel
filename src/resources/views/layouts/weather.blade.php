@extends('view')

@section()
    <form action="post/city" method="post">
        <label for="city"></label>
        <input type="text" name="city" id="city">
        <button>Submit</button>
    </form>
@endsection
