@extends('layouts.app')

@section('content')
<div class="MyContainer">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Admin!') }}</div>

                <div class="card-body">    
                   <a href="{{ route('admin.order') }}">Замовлення</a>
                    <a href="{{ route('admin.submit') }}">Мерч</a>
                    <a href="{{ route('categories.index') }}">Категорії</a>
                    <a href="{{ route('admin.submit') }}">Новини</a>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
