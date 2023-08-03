@extends('layouts/main')

@section('title', 'Home')

@section('main_content')

<section id="current-series">
    <div class="container cards-container">
        @foreach($comics as $comic)
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

@endsection