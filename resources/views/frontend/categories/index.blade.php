@include('layout.frontend.header')

    <h1>Categories</h1>

    <ul>
        @foreach($categories as $category)
            <li><a href="{{ route('categories.show', $category->slug) }}">{{ $category->name }}</a></li>
        @endforeach
    </ul>

@include('layout.frontend.footer')