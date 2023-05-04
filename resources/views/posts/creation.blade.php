@extends("layout.main")

@section("content")
    <form class="form create" action="{{route("create")}}" method="post" enctype="multipart/form-data">
        @csrf
        <ul class="form__list">
            <li class="form__item">
                <label for="title" class="create__label form__label">
                    Post title:
                    <input type="text" name="title" id="title" class="create__input form__input">
                </label>
            </li>
            <li class="form__item">
                <label for="category" class="create__label form__label">
                    Post category:
                    <input type="text" name="category" id="category" class="create__input form__input">
                </label>
            </li>
            <li class="form__item">
                <label class="create__label form__label">
                    Image:
                    <input type="file" name="image" class="create__input--file">
                </label>
            </li>
            <li class="form__item">
                <label class="create__label form__label">
                    Paragraph:
                    <textarea name="paragraph[0]" cols="30" rows="10" class="create__textarea"></textarea>
                </label>
            </li>
        </ul>
        <button type="submit" class="create__paragraph form__submit">Add paragraph</button>
        <button type="submit" class="create__submit form__submit">Publish</button>
    </form>

    <script>
        const createParagraphButton = document.querySelector(".create__paragraph");
        const form = document.querySelector(".form__list");
        let paragraphCounter = 0;

        createParagraphButton.addEventListener("click", (event) => {
            event.preventDefault();
            paragraphCounter++;

            form.innerHTML += `
                <li class="form__item">
                    <label class="create__label form__label">
                        Paragraph:
                        <textarea name="paragraph[${paragraphCounter}]" cols="30" rows="10" class="create__textarea"></textarea>
                    </label>
                </li>
            `;
        });
    </script>
@endsection
