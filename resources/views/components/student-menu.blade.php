<label for="c__menu" class="menu__label--left"><span class="sro">rétracter le menu principal</span>
    <div class="menu__icon--left menu__icon">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
        </svg>
    </div>
</label>
<input type="checkbox" name="" id="c__menu" class="sro">
<nav class="header__menu--student">
    <h2 class="menu__title">Menu des commandes</h2>
    <div>
        <a {{request()->routeIs('studentHome') ? "id=currentpage" : ""}} href="{{route('studentHome')}}"
            class="menu__link">
            <svg class="
            menu__link__icon" xmlns="http://www.w3.org/2000/svg" width="22" height="22">
                <path d="M11 7.67V11m0 0v3.33M11 11h3.33M11 11H7.67M21 11A10 10 0 1111 1a10 10 0 0110 10z" fill="none"
                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
            </svg>Créer un nouvelle commande
        </a>


        <a {{request()->routeIs('studentOrders') ? "id=currentpage" : ""}} href="{{route('studentOrders')}}"
            class="menu__link">
            <svg class="menu__link__icon" xmlns="http://www.w3.org/2000/svg" width="18.72" height="23.5">
                <path
                    d="M5.78 3.39h-2.4A2.39 2.39 0 001 5.78V20.1a2.39 2.39 0 002.39 2.39h11.94a2.39 2.39 0 002.4-2.39V5.78a2.39 2.39 0 00-2.4-2.4h-2.39m-7.16 0a2.39 2.39 0 002.39 2.4h2.38a2.39 2.39 0 002.4-2.4m-7.17 0A2.39 2.39 0 018.17 1h2.39a2.39 2.39 0 012.38 2.39M5.78 14.14l2.39 2.39 4.77-4.78"
                    fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
            </svg>
            Commandes effectuées</a>
        <a {{request()->routeIs('studentPay') ? "id=currentpage" : ""}} href="{{route('studentPay')}}"
            class="menu__link">
            <svg class="menu__link__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path
                    d="M12.2 13.5c-1.2 1.9-3.1 1.9-4.2 0-1.2-1.9-1.2-5.1 0-7.1 1.2-1.9 3.1-1.9 4.2 0M6 8.5h4m-4 3h4m9-1.5c0 5-4 9-9 9s-9-4-9-9 4-9 9-9 9 4.1 9 9z"
                    fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            Payer une commande</a>
    </div>
</nav>