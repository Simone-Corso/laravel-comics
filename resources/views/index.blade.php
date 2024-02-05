
@section ('main-content')
<div class="jumbtron">
            <section>
                <img class='image-jumbtron' src="../assets/img/jumbotron.jpg" alt="">
            </section>
        </div>
        <div class='container-row'>
            <section>
                <Cards :cards="cards" />
            </section>
        </div>
        <div class="button-center">
        <button>
            <P>sign-up now!</P>
        </button>
        </div>
<div class='cards-row'>
    @foreach($cards as $card)
        <article>
            <img src="{{ $card['thumb'] }}" alt="Card Image">
            <h2>{{ $card['title'] }}</h2>
            <p>{{ $card['description'] }}</p>
            <p>Price: {{ $card['price'] }}</p>
            <p>Series: {{ $card['series'] }}</p>
            <p>Sale Date: {{ $card['sale_date'] }}</p>
            <p>Type: {{ $card['type'] }}</p>
        </article>
    @endforeach
</div>

@endsection
