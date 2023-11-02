<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MegaSoft | Website</title>
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/fonts.css" />
    <link rel="stylesheet" href="css/icons.css" />
    <!-- This style for only this page -->
    <link rel="stylesheet" href="css/about.css" />
  </head>

  <body>
    <!--********************************* Start WRAPPER Section ************************************ -->
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
        <!-- Start ABOUT banner -->
        <div class="about__banner page__banner-bg">
            <div class="container">
                <div class="about">
                    <h1 class="about__title">@lang('about.about_title')</h1>
                    <div class="about__links">
                        <a href="{{ url('/') }}" class="about__home">@lang('about.home')</a>
                        <span class="about__link-sign">
                            <i class="about__icon fa-solid fa-chevron-right" style="color: #ffffff"></i>
                        </span>
                        <a href="{{ route('about') }}" class="about__link">@lang('about.about_us')</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
      <!-- /HEADER -->

      <!-- Start MAIN -->
      <main class="main">
        <div class="container">
          <div class="delivery">
              <div class="delivery__img">
                  <img src="images/delivery__img.png" alt="Delivery" class="delivery__img-item" />
              </div>
              <div class="delivery__desc">
                  <div class="delivery__text">
                      <h3 class="delivery__title">@lang('about.delivery_title')</h3>
                      <p class="delivery__parag main-text">@lang('about.delivery_description')</p>
                  </div>
                  <div class="delivery__cards">
                      <div class="delivery__cards-item main-cards">
                          <i class="fa-regular fa-circle-check delivery__icon" style="color: #ffffff"></i>
                          <h3 class="delivery__cards-title main-cards__title">@lang('about.fast_processing')</h3>
                          <p class="delivery__cards-desc main-text">@lang('about.fast_processing_description')</p>
                      </div>
      
                      <div class="delivery__cards-item main-cards">
                          <i class="fa-regular fa-circle-check delivery__icon" style="color: #ffffff"></i>
                          <h3 class="delivery__cards-title main-cards__title">@lang('about.support_team')</h3>
                          <p class="delivery__cards-desc main-text">@lang('about.support_team_description')</p>
                      </div>
      
                      <div class="delivery__cards-item main-cards">
                          <i class="fa-regular fa-circle-check delivery__icon" style="color: #ffffff"></i>
                          <h3 class="delivery__cards-title main-cards__title">@lang('about.well_documented')</h3>
                          <p class="delivery__cards-desc main-text">@lang('about.well_documented_description')</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      

      <section id="working__section">
        <div class="container">
            <img src="images/working__after.svg" alt="@lang('about.working_after_icon_alt')" class="working__section-icon working__after-icon" />
            <div class="working">
                <div class="working__desc">
                    <div class="working__text">
                        <h3 class="working__title">@lang('about.how_we_work_title')</h3>
                        <p class="working__parag main-text">@lang('about.how_we_work_description')</p>
                    </div>
                    <div class="working__cards">
                        <!-- Research Card -->
                        <div class="working__cards-item main-cards">
                            <img src="assets/icons/search 02.svg" alt="@lang('about.research_icon_alt')" class="working__cards-icon" />
                            <h3 class="working__cards-title main-cards__title">@lang('about.research_title')</h3>
                            <p class="working__cards-desc main-text">@lang('about.research_description')</p>
                        </div>
                        <!-- Concept Card -->
                        <div class="working__cards-item main-cards">
                            <img src="assets/icons/idea.svg" alt="@lang('about.concept_icon_alt')" class="working__cards-icon" />
                            <h3 class="working__cards-title main-cards__title">@lang('about.concept_title')</h3>
                            <p class="working__cards-desc main-text">@lang('about.concept_description')</p>
                        </div>
                        <!-- Design Card -->
                        <div class="working__cards-item main-cards">
                            <img src="assets/icons/fountain pen.svg" alt="@lang('about.design_icon_alt')" class="working__cards-icon" />
                            <h3 class="working__cards-title main-cards__title">@lang('about.design_title')</h3>
                            <p class="working__cards-desc main-text">@lang('about.design_description')</p>
                        </div>
                        <!-- Development Card -->
                        <div class="working__cards-item main-cards">
                            <img src="assets/icons/web.svg" alt="@lang('about.development_icon_alt')" class="working__cards-icon" />
                            <h3 class="working__cards-title main-cards__title">@lang('about.development_title')</h3>
                            <p class="working__cards-desc main-text">@lang('about.development_description')</p>
                        </div>
                    </div>
                </div>
                <div class="working__gallery">
                    <div class="working__img">
                        <img src="images/Working-img.png" alt="Working" class="working__img-item" />
                    </div>
                    <div class="working__collection">
                        <div class="working__collection-wrapper">
                            <img src="images/working-collection1.png" alt="Working collection" class="working__collection-item" />
                        </div>
                        <div class="working__collection-wrapper">
                            <img src="images/working-collection2.png" alt="Working collection" class="working__collection-item" />
                        </div>
                    </div>
                </div>
            </div>
            <img src="images/working__before.svg" alt="@lang('about.working_before_icon_alt')" class="working__section-icon working__before-icon" />
        </div>
    </section>

        <div class="container">
          <!--********************************* Start CONTACT Section ************************************ -->
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
                >Farrux Dusniyazov</span
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

      <!--============================================= Start MODAL section =============================================-->
      @include('layouts.modal')
      <!-- /MODAL -->

      <!--============================================= Start FOOTER section =============================================-->
     @include('layouts.footer')
      <!-- /FOOTER -->
    </div>
   
    
    <script>
      function changeLang(lang) {
          let urls = '/locale/' + lang.value;
          window.location.href = urls;
      }
  </script>
    </body>
    
  </body>
</html>
