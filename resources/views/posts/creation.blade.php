@extends("layout.main")

@section("content")
    <form class="form create" action="" method="post" enctype="multipart/form-data">
        @csrf
        <label for="title" class="create__label form__label">
            Post title:
            <input type="text" name="title" id="title" class="create__input form__input">
        </label>
        <label class="create__label form__label">
            Paragraph:
            <textarea name="paragraph" cols="30" rows="10" class="create__textarea"></textarea>
        </label>
        <label class="create__label form__label">
            Image:
            <input type="file" name="image" class="create__input--file">
        </label>
        <button type="submit" class="create__paragraph form__submit">Add paragraph</button>
        <button type="submit" class="create__image form__submit">Add image</button>
        <button type="submit" class="create__submit form__submit">Publish</button>
    </form>
@endsection
