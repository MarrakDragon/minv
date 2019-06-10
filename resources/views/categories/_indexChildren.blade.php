<ul>
    @foreach($categories as $category)
    <li>
        <h5>{{ $category->name }}</h5>
        @if(count($category->children))
        @include('categories._indexChildren',['categories' => $category->children])
        @endif
    </li>
    @endforeach
</ul>