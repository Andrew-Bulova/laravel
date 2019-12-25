@extends('view')

@section('content')
    <form action="{{route('city')}}" method="post">
        @csrf
        <label for="city">City</label>
        <input type="text" name="city" id="city">
        <button>Submit</button>
    </form>
@endsection
