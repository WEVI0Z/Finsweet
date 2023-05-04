<a href="{{route("info-page", ["id" => $post->id])}}" class="post">
    <img src="{{$post->image}}" alt="Post Picture" width="490" height="318" class="post__picture">
    <div class="post__right-side">
        <p class="post__category">{{$post->category}}</p>
        <h3 class="post__title">{{$post->title}}</h3>
        <p class="post__description">
            {{$post->paragraphs[0]->text}}
        </p>
    </div>
</a>