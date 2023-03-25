@extends('layouts.app')

@section('newsblock')
<div class="newsblockBasis">

    <div class="left">
    @foreach($news as $new)
         <div class="blockNews">
              <div  class="photo" style=" background-image: url({{ asset('/storage/' . $new->name_main_photo) }});">
                <!-- <img style="while:auto;  height:100%;" src="{{ asset('/storage/' . $new->namePhoto) }}">  -->
               </div>
     
               <div  class="text">
                    <div class="textP">
                        <p>{{$new->title}}</p>
                        <p>{{$new->text}}</p>
                    </div> 
                    <div  class="textAButton">
                        <a class="aButton" href="{{ route('news.show', $new)}}" >докладніше&rarr;</a>
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