<div class="book__info">
    <!-- Div en display grid -->
    <!-- TODO ajouter les valeurs de champs -->
    <img class="book__info__img" src="{{$book->cover->cover_path}}" alt="couverture du livre {{$book->title}}">
    <dl class="book__info__about">
        <dt class="book__term book__info__term"><abbr title="Prix public">Prix</abbr>&nbsp;:</dt>
        <dd class="book__def book__info__def">{{$sale->student_price}}</dd>
        <dt class="book__term book__info__term"><abbr title="Prix public">P.public</abbr>&nbsp;:</dt>
        <dd class="book__def book__info__def">{{$sale->public_price}}</dd>
        <dt class="book__term  book__info__term">Edition&nbsp;:</dt>
        <dd class="book__def book__info__def">{{$book->editor}}</dd>
        <dt class="book__term book__info__term">Auteur(s)&nbsp;:</dt>
        <dd class="book__def book__info__def">
            @foreach($book->authors as $author)
            <p>{{$author->name}}</p>
            @endforeach
        </dd>
        <dt class="book__term book__info__term">ISBN&nbsp;:</dt>
        <dd class="book__def book__info__def">{{$book->isbn}}</dd>
    </dl>
    @if ($book->textualContent)
    <dl class="book__info__more">
        <dt class="more__term book__info__more__term">Remarque sur l'édition&nbsp;:</dt>
        <dd class="more__def book__info__more__def">{{$book->textualContent->text}}</dd>
    </dl>
    @endif
    <x-book-stock-options :availability='$book->availability' :stock='$book->stock' :bookId='$book->id' />

</div>