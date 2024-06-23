@include('layout.frontend.header')

    <h1>Manufacture Categories</h1>

    <ul>
        @foreach($categories as $category)
            <li><a href="{{ route('categories.pshow', $category->slug) }}">{{ $category->name }}</a></li>
        @endforeach
    </ul>

@include('layout.frontend.footer')