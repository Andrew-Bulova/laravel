<ul>
    <li>
        @foreach($categories as $category)
            @include('sub', $category)

        @endforeach
    </li>
</ul>
