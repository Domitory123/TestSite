<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
  
    <div class="center">
        <div class="dolia">
            @include("inc.header")
      
            <div class="line"> 
                <hr/>
            </div>
              
                @if(Request::is('/'))
                    @include("inc.slider")               
                @endif
             
                @yield('newsblockOne') 
                @yield('newsblock') 
                @yield('contentWelcom')               
                @yield('sendingNews') 
                @yield('showMerch') 
                @yield('addMerch') 
                @yield('buyMerch') 
                @yield('updateMerch') 
               
                @yield('content')
      
            
               <!-- @yield('contentSlider')  -->
               <!-- @yield('content')  -->
               <!--   @include("inc.tesrSection") -->
               
        </div>           
        @include("inc.bottom")
    </div>   


<!-- src="/js/app.js"    -->
<script  >  


function clickImg(elem) 
{	 		     
    document.getElementById("divMainImg").style.backgroundImage="url("+elem.src+")";
   // console.log(document.getElementById("divMainImg").style.backgroundImage);
}


 /* Устанавливаем стартовый индекс слайда по умолчанию: */
 let slideIndex = 1;
/* Вызываем функцию, которая реализована ниже: */
showSlides(slideIndex);

/* Увеличиваем индекс на 1 — показываем следующий слайд: */
function nextSlide() {
   
    //console.log("1")
    showSlides(slideIndex += 1);
}

/* Уменьшаем индекс на 1 — показываем предыдущий слайд: */
function previousSlide() {
    showSlides(slideIndex -= 1);  
}

/* Устанавливаем текущий слайд: */
function currentSlide(n) {
    showSlides(slideIndex = n);
}

/* Функция перелистывания: */
function showSlides(n) {
    /* Обращаемся к элементам с названием класса "item", то есть к картинкам: */
    let slides = document.getElementsByClassName("item");
    
    /* Проверяем количество слайдов: */
    if (n > slides.length) {
      slideIndex = 1
    }
    if (n < 1) {
        slideIndex = slides.length
    }
  
    /* Проходим по каждому слайду в цикле for: */
    for (let slide of slides) {
        slide.style.display = "none";
    }
    /* Делаем элемент блочным: */
    slides[slideIndex - 1].style.display = "block";    
  }


// try {
//     require('bootstrap');
// } catch (e) {}

// /**
//  * We'll load the axios HTTP library which allows us to easily issue requests
//  * to our Laravel back-end. This library automatically handles sending the
//  * CSRF token as a header based on the value of the "XSRF" token cookie.
//  */

// window.axios = require('axios');

// window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

// /**
//  * Echo exposes an expressive API for subscribing to channels and listening
//  * for events that are broadcast by Laravel. Echo and event broadcasting
//  * allows your team to easily build robust real-time web applications.
//  */

//  import Echo from 'laravel-echo';

//  window.Pusher = require('pusher-js');

//  window.Echo = new Echo({
//      broadcaster: 'pusher',
//      key: process.env.MIX_PUSHER_APP_KEY,
//      cluster: process.env.MIX_PUSHER_APP_CLUSTER,
//      forceTLS: true
//  });








</script>   


</body>
</html>
