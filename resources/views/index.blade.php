

<div class='cards-row'>
    @foreach($cards as $card)
        <article>
            <img src="{{ $card['thumb'] }}" alt="Card Image">
            <h2>{{ $card['series'] }}</h2>
        </article>
    @endforeach
</div>