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
            </div>
            <div id="advertise">
                <p>ADVERTISEMENT</p>
                <img src="{{Vite::asset('resources/img/adv.jpg')}}" alt="adv">
            </div>
        </div>
    </div>
</section>
@endsection