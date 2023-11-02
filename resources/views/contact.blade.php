<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- TITLE for website -->
    <title>MegaSoft | Website</title>

    <!-- CSS file links below -->
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/fonts.css" />
    <link rel="stylesheet" href="css/icons.css" />
    <!-- This style for only this page -->
    <link rel="stylesheet" href="css/contact.css" />
  </head>

  <body>
    <!--========================================== Start WRAPPER Section ==========================================-->
    <div class="wrapper">
      <!--====================================== Start NAVBAR section ======================================-->
      <nav class="site-nav">
        <!-- Site LOGO -->
        <div class="site-nav__container">
          <div class="site-nav-logo">
            <a href="{{ route('app') }}" class="site-nav-logo__item">
              <img src="assets/icons/site-logo.svg" class="site-logo site-nav__logo-img">
            </a>
          </div>
          <!-- SITENAV menu -->
          <div class="site-nav-menu">
            
            <ul class="site-nav-menu__list">
                <li class="site-nav__list">
                    <a href="{{ route('app') }}" class="site-nav__link {{ request()->routeIs('home') ? 'active' : '' }}">
                        @lang('menu.home')
                    </a>
                </li>
                <li class="site-nav__list">
                    <a href="{{ route('about') }}" class="site-nav__link {{ request()->routeIs('about') ? 'active' : '' }}">
                        @lang('menu.about')
                    </a>
                </li>
                <li class="site-nav__list">
                    <a href="{{ route('portfolio') }}" class="site-nav__link {{ request()->routeIs('portfolio') ? 'active' : '' }}">
                        @lang('menu.portfolio')
                    </a>
                </li>
                <li class="site-nav__list">
                    <a href="{{ route('services') }}" class="site-nav__link {{ request()->routeIs('services') ? 'active' : '' }}">
                        @lang('menu.services')
                    </a>
                </li>
                <li class="site-nav__list">
                    <a href="{{ route('contact') }}" class="site-nav__link {{ request()->routeIs('contact') ? 'active' : '' }}">
                        @lang('menu.contact')
                    </a>
                </li>
            </ul>
            
        </div>
        <!-- SITENAV Btn -->
        <div class="site-nav-btns">
            <div class="site-nav__toggle">
                <select class="site-nav-btns__toggle" onchange="changeLang(this)">
                    <option value="uz" @selected(session('locale') == 'uz')>Uz</option>
                    <option value="en" @selected(session('locale') == 'en')>En</option>
                    <option value="ru" @selected(session('locale') == 'ru')>Ru</option>
                </select>
            </div>
            <div class="site-nav-btns__wrapper">
                <button class="site-nav-btns__btn open__modal-btn">
                    @lang('menu.chat')
                </button>
                
            </div>
            <button class="site-nav__menu-icon">
                <img src="assets/icons/menu-icon.svg" alt="Menu__icon" />
            </button>
        </div>
    </div>
</nav>
      <!-- /NAVBAR -->
      <!--====================================== Start HEADER section ======================================-->
      <header class="header">
        <!--====================================== Start CONTACT-PAGE__BANNER section ======================================-->
        <div class="contact-page__banner page__banner-bg">
            <div class="container">
                <div class="contact-page">
                    <h1 class="contact-page__title">@lang('contact.title')</h1>
                    <div class="contact-page__links">
                        <a href="{{ route('app', app()->getLocale()) }}" class="contact-page__home">@lang('contact.home')</a>
                        <span class="contact-page__link-sign">
                            <i class="contact-page__icon fa-solid fa-chevron-right" style="color: #ffffff"></i>
                        </span>
                        <a href="{{ route('contact', app()->getLocale()) }}" class="contact-page__link">@lang('contact.contact')</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /CONTACT__BANNER -->
    </header>
    
      <!-- /HEADER -->

      <!--=============================================== Start MAIN section ===============================================-->
      <main class="main">
        <!--=============================================== Start CONNECTION section ===============================================-->

        <div class="connection">
          <div class="container">
              <div class="connection__wrapper">
                  <div class="connection__body">
                      <div class="connection__desc">
                          <h2 class="connection__title main-title">@lang('contact.title')</h2>
                          <p class="connection__text main-text">@lang('contact.text')</p>
                      </div>
                      <div class="connection__info">
                          <h3 class="connection__info-title">@lang('contact.office_title')</h3>
                          <div class="connection__img-wrapper">
                              <img src="images/connection__img.png" alt="Img" class="connection__img" />
                          </div>
                          <h4 class="connection__location">@lang('contact.location')</h4>
                          <span class="contact__details main-text">
                              <i class="details__icons fa-solid fa-location-dot" style="color: #ffffff"></i>
                              @lang('contact.address')
                          </span>
                          <span class="contact__details main-text">
                              <i class="details__icons fa-solid fa-phone-volume" style="color: #ffffff"></i>
                              @lang('contact.phone')
                          </span>
                      </div>
                  </div>
                  <div class="connection__form">
                      <form action="#" class="contact__page-form">
                          <label for="connection__name" class="connection__label">@lang('contact.name_label')</label>
                          <input type="text" class="connection__input" id="connection__name" placeholder="Farrux Dusniyazov" />
      
                          <label for="connection__number" class="connection__label">@lang('contact.phone_label')</label>
                          <input type="text" class="connection__input" id="connection__number" placeholder="+998(00) 000 00 00" />
      
                          <label for="connection__company" class="connection__label">@lang('contact.company_label')</label>
                          <input type="text" class="connection__input" id="connection__company" placeholder="Megasoft" />
      
                          <label for="connection__message" class="connection__label">@lang('contact.message_label')</label>
                          <textarea id="connection__message" class="connection__input connection__message" rows="7" placeholder="@lang('contact.message_placeholder')"></textarea>
      
                          <button type="submit" class="main-btn">@lang('contact.submit_button')</button>
                      </form>
                  </div>
              </div>
          </div>
      </div>
      

        <!-- /CONNECTION -->
      </main>
      <!-- /MAIN -->

      <!--============================================= Start MODAL section =============================================-->
      @include('layouts.modal')
      <!-- /MODAL -->

      <!--============================================= Start FOOTER section =============================================-->
      @include('layouts.footer')
      <!-- /FOOTER -->
    </div>
    <!-- /WRAPPER -->
    <script>
      function changeLang(lang) {
          let urls = '/locale/' + lang.value;
          window.location.href = urls;
      }
  </script>
   <script src="assets/js/main.js"></script>
  </body>
</html>
