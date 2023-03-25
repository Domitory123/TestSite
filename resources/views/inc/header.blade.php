@section("header")
<div class="menu">
    <ul class="main-menu">
        <li class="active"> <a href="\">Головна</a></li>
        <li><a href="{{ route('news.index') }}">Новини</a></li>
        <li><a href="{{ route('merch.index') }}">мерч&#11088;</a></li>
        <li><a href="#url">Фотогалерея</a></li>
        <li><a href="#url">Контакти</a></li>   
       

      @if (Auth::user()!=null && Auth::user()->admin)
      <li><a href="{{ route('admin.submit') }}">Адмінка</a></li>
      <li><a  href="{{ route('news.create') }}">добавлення новини</a></li>
      <li><a  href="{{ route('merch.create') }}">добавлення мерчу</a></li>  
      @endif

        @guest
                            @if (Route::has('login'))
                                <li class="right" >
                                    <a  href="{{ route('login') }}">{{ __('Увійти') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="right" >
                                    <a  href="{{ route('register') }}">{{ __('Реєстрація') }}</a>
                                </li>
                            @endif
                        @else
                            
                                <li class="right" >
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();"> {{ __('Вийти') }}
                                    </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();"> {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>                              
                            </li>

                            <li class="right" >
                                 <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  вітаємо  {{ Auth::user()->name }}!
                                </a> 
                         
                             </li>
                       @endguest
    </ul>  
</div>

<!-- <div class="header">
    <ul class="menu">
        <li><a href="\">головна</a></li>
        <li><a href="\welcome">показ</a></li>
    </ul>
</div> -->
