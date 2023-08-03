@php     $links = config('header_links'); @endphp
    

<header>
    <div class="container">
            <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="DC logo">
        <nav>
            <ul>
                @foreach($links as $link)
                <li>
                    <a :href="$link['url']">{{ $link['text'] }}</a>
                </li>
                @endforeach
            </ul>
        </nav>
    </div>
</header>