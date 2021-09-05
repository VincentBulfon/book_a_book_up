<div class="content">
    <h2 class="content__title">Détails du livre {{$book->title}}</h2>
    <div>
        <table class="table">
            <thead class="table__header">
                <tr>
                    <th class="header__cell" scope="col"><a class="header__link" href="">Titre</a></th>
                    <th class="header__cell header__heading">Prix</th>
                </tr>
            </thead>
            <div>
                <tbody>
                    <tr class="body__row">
                        <td class="body__cell body__cell--first"><a href="?bookInfo={{$book->id}}"
                                class="body__link body__link--first">{{$book->title}}</a></td>
                        <td class="body__cell">{{$sale->student_price}}€</td>
                    </tr>
                    <tr class="book__info__bottom__row">
                        <td colspan="3" class="book__info__cell">
                            <div class="book__info">
                                <img class="book__info__img" src="{{$book->cover->cover_path}}"
                                    alt="couverture du livre {{$book->title}}">
                                <dl class="book__info__about">
                                    <dt class="book__term book__info__term"><abbr
                                            title="Prix public">P.public</abbr>&nbsp;:</dt>
                                    <dd class="book__def book__info__def">{{$sale->public_price}}€</dd>
                                    <dt class="book__term  book__info__term">Edition&nbsp;:</dt>
                                    <dd class="book__def book__info__def">{{$book->editor}}</dd>
                                    <dt class="book__term book__info__term">Auteur(s)&nbsp;:</dt>
                                    <dd class="book__def book__info__def">@foreach($book->authors as $author)<p>
                                            {{$author->name}}</p> @endforeach
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
                            </div>
                        </td>
                    </tr>
                </tbody>
            </div>
        </table>
    </div>
    <!--override default form action -->
    <div class="end end__cta end__cta--two">
        <a href="{{url()->previous()}}" class="btn end__btn btn--secondary" type="submit">Retour</a>
    </div>
</div>