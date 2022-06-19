@extends('layouts.base')

@section('pageTitle', 'DC Comics - Home')

@section('mainContent')
    <main>
        <div class="jumbo"></div>
        <section class="cards-container">
            <div class="container">
                <span class="series">
                    Current series
                </span>
                <div class="cards-holder">
                    @foreach ($comics as $comic)
                        <div class="card">
                            <div class="thumb">
                                <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                            </div>
                            <div class="description">
                                <h5>{{$comic['title']}}</h5>
                            </div>
                        </div>
                    @endforeach
                <div class="button">
                    <a href="/comics/create">Aggiungi fumetto</a>
                </div>
            </div>
        </section>
        <section class="sections">
            <div class="container">
                <div class="card">
                    <img src="{{asset('images/buy-comics-digital-comics.png')}}" alt="Digital Comics">
                    <h4>Digital Comics</h4>
                </div>
                <div class="card">
                    <img src="{{asset('images/buy-comics-merchandise.png')}}" alt="Merchandise">
                    <h4>DC Merchandise</h4>
                </div>
                <div class="card">
                    <img src="{{asset('images/buy-comics-subscriptions.png')}}" alt="Subscriptions">
                    <h4>Subscription</h4>
                </div>
                <div class="card">
                    <img src="{{asset('images/buy-comics-shop-locator.png')}}" alt="Shop Locator" class="small">
                    <h4>Comic shop locator</h4>
                </div>
                <div class="card">
                    <img src="{{asset('images/buy-dc-power-visa.svg')}}" alt="Power Visa">
                    <h4>DC Power Visa</h4>
                </div>
            </div>
        </section>
    </main>
@endsection