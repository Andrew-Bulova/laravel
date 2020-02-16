@extends('main')

@section('content')
    <div class="container">
        <form action="{{route('new_student')}}" method="post">
            @csrf
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="form-group">
                <label for="inputFirstName">First Name</label>
                <input type="text" class="form-control" id="inputFirstName" aria-describedby="emailHelp"
                       name="first_name">
            </div>
            <div class="form-group">
                <label for="inputLastName">Last Name</label>
                <input type="text" class="form-control" id="inputLastName" name="last_name">
            </div>
            <div class="form-group">
                <label for="inputSecondName">Second Name</label>
                <input type="text" class="form-control" id="inputSecondName" name="second_name">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
