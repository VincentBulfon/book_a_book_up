<div>
    <tbody>
        <tr class="body__row">
            <td class="body__cell body__cell--first"><a href="?bookInfo={{$book->id}}"
                    class="body__link body__link--first">{{$book->title}}</a></td>
            <td class="body__cell"><a href="" class="body__link">@if($book->availability == true) Oui @else Non @endif</a></td>
            <td class="body__cell"><a href="" class="body__link">{{$book->stock}}</a></td>
    
        </tr>
        <tr class="book__info__bottom__row">
            <td colspan="3" class="book__info__cell">
                <x-teacher-book-infos :book='$book'/>
            </td>
        </tr>
    </tbody>
</div>