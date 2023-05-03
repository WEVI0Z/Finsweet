@extends("layout.main")

@section("content")
    <section class="posts">
        <h2 class="posts__title">All posts</h2>

        <ul class="posts__list">
            @foreach ($posts as $post)
                <li class="posts__item">
                    @include("posts.post")
                </li>
            @endforeach
        </ul>
    </section>
@endsection