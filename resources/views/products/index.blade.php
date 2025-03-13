@extends('layouts.app')

@section('content')
    <h1>Mahsulotlar ro‘yxati</h1>
    <a href="{{ route('products.create') }}">Yangi mahsulot qo‘shish</a>
    <ul>
        @foreach ($products as $product)
            <li>{{ $product->title }} - ${{ $product->price }}</li>
        @endforeach
    </ul>
@endsection
