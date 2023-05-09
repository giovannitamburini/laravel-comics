<header>

    {{-- navbar --}}
    <nav class="container d-flex justify-content-between align-items-center">
        
        {{-- logo sulla sinistra --}}
        <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Logo Dc">

        {{-- lista dei link --}}
        <ul class="d-flex justify-content-between align-items-center gap-3">
            <li>characters</li>
            <li>comics</li>
            <li>movies</li>
            <li>tv</li>
            <li>games</li>
            <li>collectibles</li>
            <li>videos</li>
            <li>fans</li>
            <li>news</li>
            <li>shop</li>
        </ul>

        {{-- search --}}
        <input type="text" placeholder="search">

    </nav>
</header>