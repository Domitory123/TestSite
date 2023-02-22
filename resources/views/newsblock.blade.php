@extends('layouts.app')

@section('newsblock')
<div class="newsblockBasis">

    <div class="left">
    @foreach($data as $d)
         <div class="blockNews">
              <div  class="photo" style=" background-image: url({{ asset('/storage/' . $d->nameMainPhoto) }});">
                <!-- <img style="while:auto;  height:100%;" src="{{ asset('/storage/' . $d->namePhoto) }}">  -->
               </div>
                   
               <div  class="text">
                    <div class="textP">
                        <p>{{$d->title}}</p>
                        <p>{{$d->text}}</p>
                    </div> 
                    <div  class="textAButton">
                        <a class="aButton" href="\newsblockOne\{{$d->id}}" >докладніше&rarr;</a>
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