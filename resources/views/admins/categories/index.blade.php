@extends('layouts.app')

@section('content')
<div class="MyContainer">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Admin!') }}</div>
                   <p>Категорії</p>
                <div class="card-body">    
                   <a href="{{ route('admin.order') }}">адмінка</a>
                    <a href="{{ route('admin.submit') }}">Добавити категорію</a>     
                </div>
            </div>
        </div>
    </div>
    <table class="TableOrders">
       <thead >
       <tr >
             <th >id</th>
             <th>назва</th>
             <th>дія</th>    
         </tr>
       </thead>
     <tbody >
        @foreach($categories as $categore)

            <tr >
                <td>{{$categore->id}}</td>
                <td>{{$categore->name}}</td>
                <td>кнопка</td>             
         </tr>
         @endforeach
     </tbody >
  </table>
</div>




@endsection
