@extends('layouts.main')

@section('main-content')
<section class="series">
    <div class="container">
        <span class="btn btn-current">
            Current Series
        </span>
        <div class="series-cont">
            @foreach($comics as $item)
            <div class="card">
                <div class="img-cont">
                    <img src="{{ $item["thumb"] }}" alt="{{ $item["title"] }}">
                </div>
                <h5 class="text">{{ $item["series"] }}</h5>
            </div> 
            @endforeach   
        </div>
        <span class="btn btn-load">
            Load More
        </span>                
    </div>    
</section>
<section class="buy">
    <div class="container">
        <div>
            <img src="{{ asset("img/buy-comics-digital-comics.png") }}" alt="">
            <span>Digital Comics</span>
        </div>
        <div>
            <img src="{{ asset("img/buy-comics-merchandise.png") }}" alt="">
            <span>DC Merchandise</span>
        </div>
        <div>
            <img src="{{ asset("img/buy-comics-subscriptions.png") }}" alt="">
            <span>Subscription</span>
        </div>
        <div>
            <img src="{{ asset("img/buy-comics-shop-locator.png") }}" alt="">
            <span>Comic Shop Locator</span>
        </div>
        <div>
            <img src="{{ asset("img/buy-dc-power-visa.svg") }}" alt="">
            <span>Dc power visa</span>
        </div>
    </div>
</section>

@endsection

@section('page-title', "Comics | I fumetti")