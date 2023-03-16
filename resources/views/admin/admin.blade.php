@extends('layouts.app')

@section('content')
<div class="MyContainer">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Admin!') }}</div>

                <div class="card-body">    
                    <a href="{{ route('adminOrder') }}">Замовлення</a>
                    <a href="{{ route('admin') }}">Мерч</a>
                    <a href="{{ route('admin') }}">Новини</a>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
