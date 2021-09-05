<nav class="header__menu--app">
    <h2 class="amenu__title">Menu de l'application</h2>
    <!-- TODO add elements to link -->
    <div class="
            amenu__user"> <img class="amenu__img" src="https://source.unsplash.com/random/44x44" alt="random image">
        <a class="amenu__link" href="">
            <span class="amenu__first">{{$firstname}}</span>
            <span class="amenu__name">{{$name}}</span>
        </a>
    </div>
    <!-- TODO ajouter le lien de déconnection -->
    <form class="amenu__form" action="/logout" method="POST">
        @csrf
        <button class="amenu__btn btn" type="submit">Logout</button>
    </form>
</nav>