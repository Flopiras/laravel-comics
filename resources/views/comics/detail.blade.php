@extends('layouts/main')

@section('title', 'Comics | Detail')

@section('main_content')
<section id="book">
    <div class="container">
        <figure>
            <p id="poster-book">COMIC BOOK</p>
            <img id="poster" src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
            <p id="poster-gallery">VIEW GALLERY</p>
        </figure>
    </div>
</section>
@endsection