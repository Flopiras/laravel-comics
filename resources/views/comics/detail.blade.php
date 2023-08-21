@extends('layouts/main')

@section('title', 'Comics | Detail')

@section('main_content')
<section id="detail">
    {{-- poster --}}
    <div id="book">
        <div class="container">
            <figure>
                <p id="poster-book">COMIC BOOK</p>
                <img id="poster" src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                <p id="poster-gallery">VIEW GALLERY</p>
            </figure>
        </div>
    </div>
    {{-- main --}}
    <div id="detail-main">
        <div class="container">
            <div id="comic-info">

                <h2>{{ $comic['title'] }}</h2>

                {{-- shop --}}
                <div class="shop">
                    <div class="status">
                        <p>
                            <span class="light">U.S. Price: </span> <span>{{ $comic['price'] }}</span>
                        </p>
                        <p class="light">AVAILABLE</p>
                    </div>
                    <div class="availability">
                        <p>Check Availability &#9207;</p>
                    </div>
                </div>
                {{-- description --}}
                <div class="description">
                    <p>{{ $comic['description'] }}</p>
                </div>
            </div>
            {{-- ADV --}}
            <div id="advertise">
                <p>ADVERTISEMENT</p>
                <img src="{{Vite::asset('resources/img/adv.jpg')}}" alt="adv">
            </div>
        </div>
    </div>
    {{-- bottom --}}
    <div id="detail-bottom">
        <div class="container">

            <div class="flex">
                {{-- talent --}}
                <div class="talent">
                    <h2 class="title">Talent</h2>
                    <div class="artist">
                        <p class="title">Art by:</p>
                        <p>
                        {{ $comic['artists'][0] }}
                        </p>
                    </div>
                    <div class="writers">
                        <p class="title">Written by:</p>
                        <p>
                        {{ $comic['writers'][0] }}
                        </p>
                    </div>
                </div>
                {{-- specs --}}
                <div class="specs">
                    <h2 class="title">Specs</h2>
                    <div class="series">
                        <p class="title">Series</p>
                        <p>
                        {{ $comic['series'] }}
                        </p>
                    </div>
                    <div class="price">
                        <p class="title">U.S. Price:</p>
                        <p>
                        {{ $comic['price']}}
                        </p>
                    </div>
                    <div class="sale">
                        <p class="title">On Sale date:</p>
                        <p>
                        {{ $comic['sale_date']}}
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection