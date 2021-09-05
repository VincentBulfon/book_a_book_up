<label for="c__menu" class="menu__label--left"><span class="sro">rétracter le menu principal</span>
    <div class="menu__icon--left menu__icon"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
        </svg></div>
</label>
<input type="checkbox" name="" id="c__menu" class="sro">
<nav class="header__menu--teacher">
    <h2 class="menu__title">Menu des commandes</h2>
    <div>
        <a {{request()->routeIs('adminHome') ? "id=currentpage" : ""}} href="{{route('adminHome')}}"
            class="menu__link"><svg class="menu__link__icon" xmlns="http://www.w3.org/2000/svg" width="18.72"
                height="23.5">
                <path
                    d="M5.78 3.39h-2.4A2.39 2.39 0 001 5.78V20.1a2.39 2.39 0 002.39 2.39h11.94a2.39 2.39 0 002.4-2.39V5.78a2.39 2.39 0 00-2.4-2.4h-2.39m-7.16 0a2.39 2.39 0 002.39 2.4h2.38a2.39 2.39 0 002.4-2.4m-7.17 0A2.39 2.39 0 018.17 1h2.39a2.39 2.39 0 012.38 2.39m-3.58 8.36h3.58m-3.58 4.78h3.58m-7.16-4.78h.01m-.01 4.78h.01"
                    fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
            </svg> Commandes reçues</a>
        <a {{request()->routeIs('bookList') ? "id=currentpage" : ""}} href="{{route('bookList')}}" class="menu__link">

            <svg class="menu__link__icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20">
                <path
                    d="M17 9H3m14 0a2 2 0 012 2v6a2 2 0 01-2 2H3a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V7a2 2 0 00-2-2M3 9V7a2 2 0 012-2m0 0V3a2 2 0 012-2h6a2 2 0 012 2v2M5 5h10"
                    fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
            </svg>Liste des livres</a>
        <a {{request()->routeIs('archivedOrders') ? "id=currentpage" : ""}} href="{{route('archivedOrders')}}"
            class="menu__link"><svg class="menu__link__icon" xmlns="http://www.w3.org/2000/svg" width="18.72"
                height="23.5">
                <path
                    d="M5.78 3.39h-2.4A2.39 2.39 0 001 5.78V20.1a2.39 2.39 0 002.39 2.39h11.94a2.39 2.39 0 002.4-2.39V5.78a2.39 2.39 0 00-2.4-2.4h-2.39m-7.16 0a2.39 2.39 0 002.39 2.4h2.38a2.39 2.39 0 002.4-2.4m-7.17 0A2.39 2.39 0 018.17 1h2.39a2.39 2.39 0 012.38 2.39m-3.58 8.36h3.58m-3.58 4.78h3.58m-7.16-4.78h.01m-.01 4.78h.01"
                    fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
            </svg>Commandes archivées</a>
        <a {{request()->routeIs('payementDetails') ? "id=currentpage" : ""}} href="{{route('payementDetails',
            ['id'=>1])}}" class="menu__link">


            <svg class="menu__link__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path
                    d="M12.2 13.5c-1.2 1.9-3.1 1.9-4.2 0-1.2-1.9-1.2-5.1 0-7.1 1.2-1.9 3.1-1.9 4.2 0M6 8.5h4m-4 3h4m9-1.5c0 5-4 9-9 9s-9-4-9-9 4-9 9-9 9 4.1 9 9z"
                    fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            Coordonnées de paiement</a>
    </div>
</nav>