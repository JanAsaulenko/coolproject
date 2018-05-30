<div class="header-menu__user-account">
  <ul class='header-menu__list'>
    @guest
      <li class="header-menu__list-item">
        <a class="user-actions" href="{{ route('login') }}" title="Авторизация">
          <span class="header-menu__text">Авторизация</span>
        </a>
      </li>
      <li class="header-menu__list-item">
        <a class="user-actions" href="{{ route('register') }}" title="Регистрация">
          <span class="header-menu__text">Регистрация</span>
        </a>
      </li>
    @else
      <li class="header-menu__list-item">
        <a class="user-actions" href="#" title="{{ Auth::user()->name }}">
          <span class="header-menu__text">{{ Auth::user()->name }}</span>
        </a>
      </li>
      <li class="header-menu__list-item">
        <a class="user-actions" href="{{ route('logout') }}" title="Выход"
           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
          <span class="header-menu__text">Выход</span>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form>
      </li>
    @endguest
  </ul>
</div>
