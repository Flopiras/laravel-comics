@extends('layouts/main')

@section('title', 'Home')

@section('main_content')

{{-- current series --}}
<section id="current-series">
    <div class="container cards-container">
        @foreach($comics as $comic)
        {{-- cards --}}
        <div class="card">
            <figure>
                <img src="{{ $comic['thumb'] }}" :alt="{{ $comic['title'] }}">
                <figcaption>{{ $comic['title'] }}</figcaption>
            </figure>
        </div>
        @endforeach
        <div class="button">LOAD MORE</div>
    </div>
</section>
{{-- navbar --}}
<section id="home_navbar">
    <div class="container">
        <nav>
            <ul>
                <li>
                    <figure>
                        <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="Digital Comics">
                        <figcaption><a href="#">digital comics</a></figcaption>
                    </figure>

                </li>
                <li>
                    <figure>
                        <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="Merchandise">
                        <figcaption><a href="#">dc merchandise</a></figcaption>
                    </figure>

                </li>
                <li>
                    <figure>
                        <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="Subscriptions">
                        <figcaption><a href="#">subscriptions</a></figcaption>
                    </figure>

                </li>
                <li>
                    <figure>
                        <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="Shop Locator">
                        <figcaption><a href="#">comic shop locator</a></figcaption>
                    </figure>

                </li>
                <li>
                    <figure>
                        <img src="{{Vite::asset('resources/img/buy-dc-power-visa.svg')}}" alt="Power Visa">
                        <figcaption>
                            <a href="#">dc power vvisa</a>
                        </figcaption>
                    </figure>

                </li>
            </ul>
        </nav>
    </div>
</section>

@endsection