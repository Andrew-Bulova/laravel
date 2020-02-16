@extends('main')

@section('content')
    <div class="container">
        <div class="container">
            <p>Student: {{$student->fullName}}</p>
        </div>
        <form method="post" action=" ">
            @csrf
            <div class="form-group">
                <label for="inputDate">Date of absent</label>
                <input type="date" class="form-control" id="inputDate" aria-describedby="emailHelp" name="date">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
@endsection
