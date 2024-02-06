@extends('layout.app')


<header>
    <nav class="menu">
    <article>
            <ul>
                <li>characters</li>
                <li>comics</li>
                <li>movies</li>
                <li>tv</li>
                <li>games</li>
                <li>collectibles</li>
                <li>videos</li>
                <li>fans</li>
                <li>news</li>
                <li>shop</li>
            </ul>
        </article>
    </nav>
</header>



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
        </article>
    @endforeach
</div>
</main>