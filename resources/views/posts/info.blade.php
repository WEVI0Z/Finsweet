@extends("layout.main")

@section("content")
    <div class="info">
        <div class="info__data">
            <p class="info__user">{{$user->name}}</p>
            <p class="info__date">Posted {{\Carbon\Carbon::parse($post->created_at)->diffForHumans()}}</p>
            <h2 class="info__title">{{$post->title}}</h2>
            <p class="info__category">{{$post->category}}</p>
        </div>
        <img width="700" height="500" src="{{asset($post->image)}}" alt="" class="info__image">
        <ul class="info__list">
            @foreach ($post->paragraphs as $paragraph)
                <li class="info__item">
                    <p class="info__paragraph">{{$paragraph->text}}</p>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
