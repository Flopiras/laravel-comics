@php     $links = config('header_links'); @endphp
    

<header>
    <div class="container">
        {{-- logo --}}
        <a href="{{ route('home') }}">
            <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="DC logo">
        </a>
            
            {{-- navbar --}}
        <nav>
            <ul>
                @foreach($links as $link)
                <li>
                    <a href="{{ route($link['route_name']) }}">{{ $link['text'] }}</a>
                </li>
                @endforeach
            </ul>
        </nav>
    </div>
    {{-- jumbotron --}}
    <div id="jumbotron">

    </div>
</header>