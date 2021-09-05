<div>

    @if ($order == null || $order->current_status_id != 1)
    <p>Il n'y a aucune commande en attente de paiement.</p>
    @else
    <table class="table table--borders">
        <thead class="table__header">
            <tr>
                <!-- #TODO definir le tris dans les requêtes afin de trier entièrement les résutats rendu -->
                <th class="header__cell header__heading" scope="col">Numero</th>
                <th class="header__cell header__heading" scope="col">Articles</th>
                <th class="header__cell header__heading" scope="col">Total</th>
            </tr>
        </thead>
        <tbody class="table__body">
            <tr class="body__row">
                <td class="body__cell body__cell--first"><a class="body__link body__link--first"
                        href="{{ route('studentShowOrder', ['id' => $order->id]) }}">{{ $order->id }}</a></td>
                <td class="body__cell">
                    <span class="body__link">{{ $order->items_count }}</span>
                </td>
                <td class="body__cell">
                    <span class="body__status">{{ $order->total_price }}€</span>
                </td>
            </tr>
        </tbody>
    </table>
    <div class="more__container">
        <p class="more more__info">Le virement doit s’effectuer sur le compte suivant :</p>
        <dl>
            <div class="more__inline">
                <dt class="more">IBAN :</dt>
                <dd class="more more__content">{{ $account->text}}</dd>
            </div>
            <div class="more__inline">
                <dt class="more">Avec la communication : </dt>
                <dd class="more more__content">Nom-Prénom-Groupe-N°de commande</dd>
            </div>
        </dl>
    </div>

    @endif
</div>