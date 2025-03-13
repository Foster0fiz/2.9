@extends('layouts.app')

@section('content')
    <h1>Yangi mahsulot qo‘shish</h1>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <label>Title:</label>
        <input type="text" name="title">
        <label>Description:</label>
        <textarea name="description"></textarea>
        <label>Price:</label>
        <input type="number" name="price" step="0.01">
        <label>Discount (%):</label>
        <input type="number" name="discount" min="0" max="100">
        <button type="submit">Saqlash</button>
    </form>
@endsection
