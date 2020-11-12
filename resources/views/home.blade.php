@extends('layouts.app')

@push('scripts')
    <script src="/home.js"></script>
@endpush

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
    <div style="text-align: center; margin-top: 1rem">
        <button id="comment_add_button" class="btn-primary">Создать коммент!</button>
    </div>
</div>
@endsection
