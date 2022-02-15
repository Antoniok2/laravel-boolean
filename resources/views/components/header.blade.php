<header>
    <h1>Postcards</h1>
    @auth
        <h1>Hello {{ Auth::user() -> name }}</h1>
        <a class="btn btn-secondary" href="{{ route('logout') }}">LOGOUT</a>
    @else 
        <h1>Effettua Login</h1>
            <form action="{{ route('login') }}" method="POST">
            
                @method('POST')
                @csrf
        
                <label for="email">E-mail</label><br>
                <input type="text" name="email" placeholder="Inserisci email"> <br>
                <label for="password">Password</label><br>
                <input type="password" name="password" placeholder="Inserisci password"> <br>
                <br>
                <input class="btn btn-primary" type="submit" value="LOGIN">
        
            </form>
        <h1>Oppure registrati</h1>
        <form action="{{ route('register') }}" method="POST">
            
            @method('POST')
            @csrf

            <label for="name">Nome</label><br>
            <input type="text" name="name" placeholder="Inserisci nome"><br>
            <label for="email">Email</label><br>
            <input type="email" name="email" placeholder="Inserisci email"><br>
            <label for="password">Password</label><br>
            <input type="password" name="password" placeholder="Inserisci password"><br>
            <label for="password-confirmation">Conferma password</label><br>
            <input type="password" name="password_confirmation" placeholder="conferma password inserita"><br><br>
            <input type="submit" value="Registrati" class="btn btn-primary">
        </form>
    @endauth
</header>