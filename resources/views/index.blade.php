@extends('layouts.app')

@section('content')

    <section class="py-3 text-center container">
        <div class="row py-lg-4">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">Ласкаво просимо!</h1>
                <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
                <form class="input-group mb-3">
                    <input type="text" class="form-control" name="index-search" value="{{ $search }}" placeholder="Введіть запит! Наприклад: сповільнювач" aria-label="Recipient's username" aria-describedby="basic-addon2" style="box-shadow: none">
                    <div class="input-group-append">
                        <button class="btn btn-secondary">Пошук</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <div class="album py-4 bg-light">
        <div class="container">

            @if($products->isNotEmpty())
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    @foreach($products as $product)
                    <div class="col">
                     <div class="card shadow-sm">
{{--                            <img src="{{ asset('img/card1.jpeg') }}" alt="product-img">--}}
                            <a href="{{ route('index.show', ['id' => $product->id]) }}"><img class="card-img-top show_page-card-main-photo" src="{{ asset('img/card1.jpeg') }}" alt="..."></a>
                            <div class="card-body">
                                <p class="card-text">{{ $product->title }}</p>
                                <p class="card-text">{{ $product->description }}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="{{ route('index.show', ['id' => $product->id]) }}" type="button" class="btn btn-sm btn-outline-primary">Переглянути</a>
                                        <a type="button" class="btn btn-sm btn-outline-warning">Додати</a>
                                    </div>
                                    <small class="text-muted">{{ $product->price . ' грн.' }}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @else
                    <div class="not-found text-center">
                        <h3 class="mb-5">За запитом: "{{ $search }}" нічого не знайдено</h3>
                        <div>
                            <h4>1) Перевірте написання запиту</h4>
                            <h4>2) Спробуйте змінити запит</h4>
                            <h4 class="mb-2 pb-3">3) Поверніться на головну для для подальшого пошуку</h4>
                        </div>
                        <a class="btn btn-primary" href="{{ route('index') }}">Назад</a>
                    </div>
            </div>
            @endif
        </div>

        {{-- Pagination --}}
        <div class="d-flex justify-content-center mt-5">
            {!! $products->withQueryString()->links('pagination::bootstrap-4') !!}
        </div>

    </div>

@endsection
