<tr class="book__info__bottom__row">
    <td colspan="3" class="book__info__cell">
        <x-book-info />
        <label for="qty">Quantité&nbsp;:</label>
        <!--
            give bookname quantiy from book controller to have the same pattern in the book name
            book->qtyname = cssavancées_qty
        -->
        <!-- set the next input to the values otained from request if no values in request set it to zero or set it to zero inside request -->
        <input type="number" name="#TODO" id="qty" value="0000000000000">
    </td>
</tr>