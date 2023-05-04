@extends("layout.main")

@section("content")
    <form class="form form--login" action="{{route("login")}}" method="post">
        @csrf
        <label for="login" class="form__label">
            Login:
            <input type="text" name="login" id="login" class="form__input" placeholder="username123...">
        </label>
        <label for="password" class="form__label">
            Password:
            <input type="password" name="password" id="password" class="form__input" placeholder="pass123...">
        </label>

        <button type="submit" class="form__submit">Login</button>
    </form>
@endsection