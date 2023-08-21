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
                
                <div class="talent">
                    <h2 class="title">Talent</h2>
                    <div class="art">
                        <p class="title">Art by:</p>
                        <p>{{ $comic['artists'][0] }}</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection