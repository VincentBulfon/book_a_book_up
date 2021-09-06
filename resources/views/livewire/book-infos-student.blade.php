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
                    <!-- Div en display grid -->
                    <!-- TODO ajouter les valeurs de champs -->
                    <img class="book__info__img" src="{{$book->cover->cover_path}}"
                        alt="Couverture du livre {{$book->title}}">
                    <dl class="book__info__about">
                        <dt class="book__term book__info__term"><abbr title="Prix public">P.public</abbr>&nbsp;:</dt>
                        <dd class="book__def book__info__def">{{$sale->public_price}}</dd>
                        <dt class="book__term  book__info__term">Edition&nbsp;:</dt>
                        <dd class="book__def book__info__def">{{$book->editor}}</dd>
                        <dt class="book__term book__info__term">Auteurs&nbsp;:</dt>
                        <dd class="book__def book__info__def">@foreach($book->authors as $author)<p>{{$author->name}}
                            </p> @endforeach</dd>
                        <dt class="book__term book__info__term">ISBN&nbsp;:</dt>
                        <dd class="book__def book__info__def">{{$book->isbn}}</dd>
                    </dl>
                    <dl class="book__info__more">
                        <dt class="more__term book__info__more__term">Remarque sur l'édition&nbsp;:</dt>
                        <dd class="more__def book__info__more__def">
                            @if({{$book->textualContent}}){{$book->textualContent->text}} @endif
                        </dd>
                    </dl>
                    <div class="form__control--inline">
                        <div class="quantity__container">
                            <input type="hidden" name="book_id" value="{{$book->id}}">
                            <label class="sro" for="quantity">Quantité :</label>
                            <input class="quantity__input" type="number" name="quantity" id="quantity"
                                @if(count($book->orders)>0)value="{{$book->orders[0]->pivot->quantity}}" @else value=0
                            @endif>
                        </div>
                        <button class="btn end__btn--half" type="submit">Ajouter à la commande
                        </button>
                    </div>
                </div>
            </td>
        </tr>
    </tbody>
</div>