<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>yiDocument</title>
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

</script>   
    </body>
</html>