@extends('layouts.app')

@push('scripts')
    <script src="{{ asset('css/home.js') }}"></script>
@endpush

@section('content')
<div class="container">
    <div class="news-company-button action-section">
        <button id="news-company-button" class="btn-danger">Добавить новую новость!</button>
    </div>
    <div class="product-company-button action-section">
        <button id="product-company-button" class="btn-danger">Добавить новый продукт!</button>
    </div>
    <div class="news-subscribe-company-button action-section">
        <button id="news-company-subscribe-button" class="btn-success">Подписаться на новости!</button>
    </div>
    <div class="product-subscribe-company-button action-section">
        <button id="product-company-subscribe-button" class="btn-success">Подписаться на новые продукты!</button>
    </div>
</div>
@endsection
