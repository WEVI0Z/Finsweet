@extends("layout.main")

@section("content")
    <form class="form form--login" action="{{route("register")}}" method="post">
        @csrf
        <p class="form__messages">
            @foreach($errors->all() as $error)
                {{$error}}<br>
            @endforeach
        </p>
        <label for="login" class="form__label">
            Login:
            <input type="text" name="login" id="login" class="form__input" placeholder="username123...">
        </label>
        <label for="password" class="form__label">
            Password:
            <input type="password" name="password" id="password" class="form__input" placeholder="pass123...">
        </label>
        <label for="password_confirmation" class="form__label">
            Password confirmation:
            <input type="password" name="password_confirmation" id="password_confirmation" class="form__input" placeholder="pass123...">
        </label>

        <button type="submit" class="form__submit">Register</button>
    </form>
@endsection