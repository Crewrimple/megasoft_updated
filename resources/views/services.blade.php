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
    <link rel="stylesheet" href="css/services.css" />
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

      <!--==================================== Start HEADER =========================================== -->
      <header class="header">
        <!-- Start SERVICES banner -->
        <div class="services-page__banner page__banner-bg">
            <div class="container">
                <div class="services-page">
                    <h1 class="services-page__title">@lang('services.title')</h1>
                    <div class="services-page__links">
                        <a href="{{ route('app', app()->getLocale()) }}" class="services-page__home">@lang('services.home')</a>
                        <span class="services-page__link-sign">
                            <i class="services-page__icon fa-solid fa-chevron-right" style="color: #ffffff"></i>
                        </span>
                        <a href="{{ route('services', app()->getLocale()) }}" class="services-page__link">@lang('services.services')</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
      <!-- /HEADER -->

      <!--=============================================== Start MAIN section ===============================================-->
      <main class="main">
        <div class="container">
          <!--=========================================== Start SERVICES Section ===========================================-->
          <div class="services services-page__items">
            <div class="services-content">
              <div class="services-content-row">
                <!-- Service Card 1: CRM Platform -->
                <div class="services-content__cards main-cards">
                  <div class="services__main-content">
                    <img
                      src="assets/icons/crm.svg"
                      alt="Crm platform"
                      class="services__cards-icon"
                    />
                    <h3 class="services__cards-title main-cards__title">
                      @lang('main.crm_platform')
                    </h3>
                    <p class="services__cards-desc main-text">
                      @lang('main.crm_platform_description')
                    </p>
                  </div>
                  <a href="{{ route('serviceitem') }}" class="services__cards-link">
                    <img
                      src="assets/icons/Arrow-circle.svg"
                      alt="Arrow"
                      class="arrow__icon"
                    />
                  </a>
                </div>
                <!-- Service Card 2: UI/UX Design -->
                <div class="services-content__cards main-cards">
                  <div class="services__main-content">
                    <img
                      src="assets/icons/fountain pen.svg"
                      alt="UI/UX Design"
                      class="services__cards-icon"
                    />
                    <h3 class="services__cards-title main-cards__title">
                      @lang('main.ui_ux_design')
                    </h3>
                    <p class="services__cards-desc main-text">
                      @lang('main.ui_ux_design_description')
                    </p>
                  </div>
                  <a href="{{ route('services') }}" class="services__cards-link">
                    <img
                      src="assets/icons/Arrow-circle.svg"
                      alt="Arrow"
                      class="arrow__icon"
                    />
                  </a>
                </div>
                <!-- Service Card 3: Web Development -->
                <div class="services-content__cards main-cards">
                  <div class="services__main-content">
                    <img
                      src="assets/icons/web.svg"
                      alt="Web Development"
                      class="services__cards-icon"
                    />
                    <h3 class="services__cards-title main-cards__title">
                      @lang('main.web_development')
                    </h3>
                    <p class="services__cards-desc main-text">
                      @lang('main.web_development_description')
                    </p>
                  </div>
                  <a href="{{ route('services') }}" class="services__cards-link">
                    <img
                      src="assets/icons/Arrow-circle.svg"
                      alt="Arrow"
                      class="arrow__icon"
                    />
                  </a>
                </div>
                <!-- Service Card 4: Mobile App Development -->
                <div class="services-content__cards main-cards">
                  <div class="services__main-content">
                    <img
                      src="assets/icons/Mobile.svg"
                      alt="Mobile App Development"
                      class="services__cards-icon"
                    />
                    <h3 class="services__cards-title main-cards__title">
                      @lang('main.mobile_app_development')
                    </h3>
                    <p class="services__cards-desc main-text">
                      @lang('main.mobile_app_development_description')
                    </p>
                  </div>
                  <a href="{{ route('services') }}" class="services__cards-link">
                    <img
                      src="assets/icons/Arrow-circle.svg"
                      alt="Arrow"
                      class="arrow__icon"
                    />
                  </a>
                </div>
                <!-- Service Card 5: E-Commerce -->
                <div class="services-content__cards main-cards">
                  <div class="services__main-content">
                    <img
                      src="assets/icons/WebStore.svg"
                      alt="E-Commerce"
                      class="services__cards-icon"
                    />
                    <h3 class="services__cards-title main-cards__title">
                      @lang('main.e_commerce')
                    </h3>
                    <p class="services__cards-desc main-text">
                      @lang('main.e_commerce_description')
                    </p>
                  </div>
                  <a href="{{ route('services') }}" class="services__cards-link">
                    <img
                      src="assets/icons/Arrow-circle.svg"
                      alt="Arrow"
                      class="arrow__icon"
                    />
                  </a>
                </div>
                <!-- Service Card 6: Content Writing -->
                <div class="services-content__cards main-cards">
                  <div class="services__main-content">
                    <img
                      src="assets/icons/Writer.svg"
                      alt="Content Writing"
                      class="services__cards-icon"
                    />
                    <h3 class="services__cards-title main-cards__title">
                      @lang('main.content_writing')
                    </h3>
                    <p class="services__cards-desc main-text">
                      @lang('main.content_writing_description')
                    </p>
                  </div>
                  <a href="{{ route('services') }}" class="services__cards-link">
                    <img
                      src="assets/icons/Arrow-circle.svg"
                      alt="Arrow"
                      class="arrow__icon"
                    />
                  </a>
                </div>
              </div>
            </div>
          </div>
          <!-- ICON for main__section top -->
          <img
            src="images/Cervices__before.svg"
            alt="Cervices"
            class="main__section-icons cervices__before services-page__after"
          />
        </div>

        <div class="container">
          <!--=========================================== Start CONTACT section ===========================================-->
          <div class="contact">
            <div class="contact__info">
              <h3 class="contact__title main-title">@lang('main.contact_us_title')</h3>
              <p class="contact__desc main-text">
                @lang('main.contact_us_description')
              </p>
              <span class="contact__details main-text">
                <i
                  class="details__icons fa-solid fa-phone-volume"
                  style="color: #ffffff"
                ></i>
                +998900000000</span
              >
              <span class="contact__details main-text"
                ><i
                  class="details__icons fa-solid fa-envelope"
                  style="color: #ffffff"
                ></i
                >MegaSoft@example.com</span
              >
              <span class="contact__details main-text"
                ><i
                  class="details__icons fa-solid fa-location-dot"
                  style="color: #ffffff"
                ></i
                >Uzbekistan</span
              >
            </div>
            <div class="contact__form">
              <form action="form">
                <div class="contact__row">
                  <div class="contact__name input__wrapper">
                    <label
                      for="contact__name"
                      class="contact__label input__label"
                      >@lang('main.name')</label
                    >
                    <input
                      type="text"
                      class="contact__input contact__name-item"
                      id="contact__name"
                    />
                  </div>
                  <div class="contact__email input__wrapper">
                    <label
                      for="contact__email"
                      class="contact__label input__label"
                      >@lang('main.email')</label
                    >
                    <input
                      type="email"
                      class="contact__input contact__email-item"
                      id="contact__email"
                    />
                  </div>
                </div>
                <div class="contact__message input__wrapper">
                  <label
                    for="contact__message"
                    class="contact__label input__label"
                    >@lang('main.message')</label
                  >
                  <textarea
                    rows="6"
                    class="contact__input contact__message-item"
                    id="contact__message"
                  ></textarea>
                </div>
                <button type="submit" class="contact__btn main-btn">
                  @lang('main.send')
                </button>
              </form>
            </div>
          </div>
          <!-- /CONTACT -->
        </div>
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
