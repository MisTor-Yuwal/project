<div class="nav-bar">
    <div class="logo">
        <h2 class="logo-heading">RS9</h2>
    </div>
    <div class="nav-links">
        {{-- <ul> --}}
            <li>
                <a href="/" class="links">Home</a>
            </li>
            <li>
                <a href="/character" class="links">Characters</a>
            </li>
            <li>
                <a href="/maps" class="links">Maps</a>
            </li>
            <li>
                <a href="/weapons" class="links">Weapons</a>
            </li>
            @if (Route::has('login'))
                <li>
                    <a href="{{ route('login') }}" class="links">LogIn</a>
                </li>
            @endif
            @if (Route::has('register'))
                <li>
                    <a href="{{ route('register') }}" class="links">SignUp</a>
                </li>
            @endif
    </div>
</div>
