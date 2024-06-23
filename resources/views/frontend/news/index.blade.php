@include('layout.frontend.header')

@foreach($news as $item)
    <div>
        <a href="{{ route('news.newsshow', $item->id) }}">
            <img src="{{ asset('storage/' . $item->news_image) }}" alt="{{ $item->title }}">
        </a>
    </div>
@endforeach

@include('layout.frontend.footer')