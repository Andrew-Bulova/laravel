<ul>
    <li>
        {{$category->name}}
        @if ($category->children)
            @foreach($category->children as $category)

            @include('sub', $category)
            @endforeach
        @endif
    </li>
</ul>
