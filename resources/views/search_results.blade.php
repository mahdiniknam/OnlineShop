@extends('layout')
@section('main')
    <h2>نتایج جستجو برای "{{ $query }}"</h2>

    @if ($products->isEmpty())
        <p>محصولی با این نام یافت نشد.</p>
    @else
        @foreach ($products as $product)
            <div class="product-item">
                <figure>
                    <a href="#"><img src="{{ asset('storage/'.$product->image) }}" class="w-100" alt="{{ $product->name }}"></a>
                </figure>
                <h5>{{ $product->name }}</h5>
                <h6>{{ $product->description }}</h6>
                <span>{{ $product->price }} تومان</span>
            </div>
        @endforeach
    @endif
  @stop
