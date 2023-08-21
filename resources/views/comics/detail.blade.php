@extends('layouts/main')

@section('title', 'Comics | Detail')

@section('main_content')
<section id="detail">
    <div id="book">
        <div class="container">
            <figure>
                <p id="poster-book">COMIC BOOK</p>
                <img id="poster" src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                <p id="poster-gallery">VIEW GALLERY</p>
            </figure>
        </div>
    </div>
    <div id="detail-main">
        <div class="container">
            <div id="comic-info">

                <h2>{{ $comic['title'] }}</h2>
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
            </div>
            <div id="advertise">
                <p>ADVERTISEMENT</p>
                <img src="{{Vite::asset('resources/img/adv.jpg')}}" alt="adv">
            </div>
        </div>
    </div>
</section>
@endsection