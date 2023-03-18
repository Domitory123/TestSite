@extends('layouts.app')

@section('newsblock')
<div class="newsblockBasis">

    <div class="left">
    @foreach($news as $n)
         <div class="blockNews">
              <div  class="photo" style=" background-image: url({{ asset('/storage/' . $n->name_main_photo) }});">
                <!-- <img style="while:auto;  height:100%;" src="{{ asset('/storage/' . $n->namePhoto) }}">  -->
               </div>
     
               <div  class="text">
                    <div class="textP">
                        <p>{{$n->title}}</p>
                        <p>{{$n->text}}</p>
                    </div> 
                    <div  class="textAButton">
                        <a class="aButton" href="{{ route('newsBlockOne', $n->id)}}" >докладніше&rarr;</a>
                    </div>
               </div>  
         </div>
        
       <br/> 
         @endforeach 
    </div>
 
    <div class="right">
         <div class="sideBlockNews">
                <p>новосний блок</p>
           </div>
    </div>
</div>
@endsection