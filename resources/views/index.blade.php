@extends('layout.app')

<main>
<div class="jumbotron">
    <section>
    <img src="{{ asset('images/jumbotron.jpg') }}" alt="Example Image">
    </section>
</div>
<div class='container-row'>
    <section>
        <Cards :cards="cards" />
    </section>
</div>
<div class="button-center">
    <button>
        <p>Iscriviti ora!</p>
    </button>
</div>
<div class='cards-row'>
    @foreach($cards as $card)
        <article>
            <img src="{{ $card['thumb'] }}" alt="Immagine della carta">
            <h2>{{ $card['title'] }}</h2>
            <p>Prezzo: {{ $card['price'] }}</p>
            <p>Serie: {{ $card['series'] }}</p>
            <p>Data di vendita: {{ $card['sale_date'] }}</p>
            <p>Tipo: {{ $card['type'] }}</p>
        </article>
    @endforeach
</div>
</main>