@extends("layout.main")

@section("content")
    <div class="info">
        <div class="info__data">
            <p class="info__user">Andrew Jhonson</p>
            <p class="info__date">Posted on 27th January 2022</p>
            <h2 class="info__title">Step-by-step guide to choosing great font pairs</h2>
            <p class="info__category">Startup</p>
        </div>
        <img width="700" height="500" src="{{asset("img/mock-info.jpg")}}" alt="" class="info__image">
        <ul class="info__list">
            <li class="info__item">
                <p class="info__paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa doloribus illo modi nisi, numquam voluptates. Labore, nam, nihil! Magni, unde!</p>
            </li>
            <li class="info__item">
                <p class="info__paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias amet aspernatur dignissimos est et facere fuga fugiat officia, perspiciatis porro provident repellendus velit vitae?</p>
            </li>
            <li class="info__item">
                <p class="info__paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad animi cupiditate dolore eos error exercitationem in incidunt laudantium magni molestiae odio qui rerum, tempore veniam voluptates.</p>
            </li>
        </ul>
    </div>
@endsection
