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
    <link rel="stylesheet" href="css/portfolio.css" />
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
        <!-- Start PORTFOILIO banner -->
        <div class="portfolio-page__banner page__banner-bg">
            <div class="container">
                <div class="portfolio-page">
                    <h1 class="portfolio-page__title">@lang('portfolio.header.title')</h1>
                    <div class="portfolio-page__links">
                        <a href="{{ route('app', app()->getLocale()) }}" class="portfolio-page__home">
                            @lang('portfolio.header.home')
                        </a>
                        <span class="portfolio-page__link-sign">
                            <i class="portfolio-page__icon fa-solid fa-chevron-right" style="color: #ffffff"></i>
                        </span>
                        <a href="{{ route('portfolio', app()->getLocale()) }}" class="portfolio-page__link">
                            @lang('portfolio.header.portfolio')
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
      <!-- /HEADER -->

      <!--=============================================== Start MAIN section ===============================================-->
      <main class="main">
        <div class="container">
          <!-- Start PORTFOLIO section -->
          <div class="portfolio portfolio-page__items">
              <!-- Portfolio content -->
              <div class="portfolio__content">
                  <!-- Portfolio Column -->
                  <div class="portfolio__col">
                      <!-- Portfolio item 1 -->
                      <div class="portfolio__item">
                          <div class="portfolio__img-wrapper">
                              <a href="#" class="portfolio__link-img">
                                  <img
                                      src="images/Food-delivery.jpg"
                                      alt="@lang('portfolio.food_delivery.img_alt')"
                                      class="portfolio__item-img"
                                  />
                              </a>
                          </div>
                          <h4 class="portfolio__item-title">@lang('portfolio.food_delivery.title')</h4>
                          <p class="portfolio__item-text main-text">@lang('portfolio.food_delivery.description')</p>
                          <div class="portfolio__item-link">
                              <a href="#" class="link__item">
                                  <img
                                      src="assets/icons/arrow-right.svg"
                                      alt="Arrow"
                                      class="link__icon"
                                  />
                              </a>
                          </div>
                      </div>
                      <!-- Portfolio item 2 -->
                      <div class="portfolio__item">
                          <div class="portfolio__img-wrapper snikers">
                              <a href="" class="portfolio__link-img">
                                  <img
                                      src="images/News-app.jpg"
                                      alt="@lang('portfolio.news_app.img_alt')"
                                      class="portfolio__item-img"
                                  />
                              </a>
                          </div>
                          <h4 class="portfolio__item-title">@lang('portfolio.news_app.title')</h4>
                          <p class="portfolio__item-text main-text">@lang('portfolio.news_app.description')</p>
                          <div class="portfolio__item-link">
                              <a href="#" class="link__item">
                                  <img
                                      src="assets/icons/arrow-right.svg"
                                      alt="Arrow"
                                      class="link__icon"
                                  />
                              </a>
                          </div>
                      </div>
                      <!-- Portfolio item 3 -->
                      <div class="portfolio__item">
                          <div class="portfolio__img-wrapper">
                              <a href="#" class="portfolio__link-img">
                                  <img
                                      src="images/Course-app.png"
                                      alt="@lang('portfolio.course_app.img_alt')"
                                      class="portfolio__item-img"
                                  />
                              </a>
                          </div>
                          <h4 class="portfolio__item-title">@lang('portfolio.course_app.title')</h4>
                          <p class="portfolio__item-text main-text">@lang('portfolio.course_app.description')</p>
                          <div class="portfolio__item-link">
                              <a href="#" class="link__item">
                                  <img
                                      src="assets/icons/arrow-right.svg"
                                      alt="Arrow"
                                      class="link__icon"
                                  />
                              </a>
                          </div>
                      </div>
                      <!-- Portfolio item 4 -->
                      <div class="portfolio__item">
                          <div class="portfolio__img-wrapper snikers">
                              <a href="" class="portfolio__link-img">
                                  <img
                                      src="images/Interior-web.png"
                                      alt="@lang('portfolio.interior_web.img_alt')"
                                      class="portfolio__item-img"
                                  />
                              </a>
                          </div>
                          <h4 class="portfolio__item-title">@lang('portfolio.interior_web.title')</h4>
                          <p class="portfolio__item-text main-text">@lang('portfolio.interior_web.description')</p>
                          <div class="portfolio__item-link">
                              <a href="#" class="link__item">
                                  <img
                                      src="assets/icons/arrow-right.svg"
                                      alt="Arrow"
                                      class="link__icon"
                                  />
                              </a>
                          </div>
                      </div>
                  </div>
      
                  <!-- Portfolio Column -->
                  <div class="portfolio__col">
                      <!-- Portfolio item 5 -->
                      <div class="portfolio__item">
                          <div class="portfolio__img-wrapper">
                              <a href="" class="portfolio__link-img">
                                  <img
                                      src="images/medical.jpg"
                                      alt="@lang('portfolio.medical.img_alt')"
                                      class="portfolio__item-img"
                                  />
                              </a>
                          </div>
                          <h4 class="portfolio__item-title">@lang('portfolio.medical.title')</h4>
                          <p class="portfolio__item-text main-text">@lang('portfolio.medical.description')</p>
                          <div class="portfolio__item-link">
                              <a href="#" class="link__item">
                                  <img
                                      src="assets/icons/arrow-right.svg"
                                      alt="Arrow"
                                      class="link__icon"
                                  />
                              </a>
                          </div>
                      </div>
                      <!-- Portfolio item 6 -->
                      <div class="portfolio__item">
                          <div class="portfolio__img-wrapper snikers">
                              <a href="" class="portfolio__link-img">
                                  <img
                                      src="images/E-Commers.jpg"
                                      alt="@lang('portfolio.e_commerce.img_alt')"
                                      class="portfolio__item-img"
                                  />
                              </a>
                          </div>
                          <h4 class="portfolio__item-title">@lang('portfolio.e_commerce.title')</h4>
                          <p class="portfolio__item-text main-text">@lang('portfolio.e_commerce.description')</p>
                          <div class="portfolio__item-link">
                              <a href="#" class="link__item">
                                  <img
                                      src="assets/icons/arrow-right.svg"
                                      alt="Arrow"
                                      class="link__icon"
                                  />
                              </a>
                          </div>
                      </div>
                      <!-- Portfolio item 7 -->
                      <div class="portfolio__item">
                          <div class="portfolio__img-wrapper">
                              <a href="" class="portfolio__link-img">
                                  <img
                                      src="images/Music-app.png"
                                      alt="@lang('portfolio.music_app.img_alt')"
                                      class="portfolio__item-img"
                                  />
                              </a>
                          </div>
                          <h4 class="portfolio__item-title">@lang('portfolio.music_app.title')</h4>
                          <p class="portfolio__item-text main-text">@lang('portfolio.music_app.description')</p>
                          <div class="portfolio__item-link">
                              <a href="#" class="link__item">
                                  <img
                                      src="assets/icons/arrow-right.svg"
                                      alt="Arrow"
                                      class="link__icon"
                                  />
                              </a>
                          </div>
                      </div>
                      <!-- Portfolio item 8 -->
                      <div class="portfolio__item">
                          <div class="portfolio__img-wrapper snikers">
                              <a href="" class="portfolio__link-img">
                                  <img
                                      src="images/Rental-app.png"
                                      alt="@lang('portfolio.rental_app.img_alt')"
                                      class="portfolio__item-img"
                                  />
                              </a>
                          </div>
                          <h4 class="portfolio__item-title">@lang('portfolio.rental_app.title')</h4>
                          <p class="portfolio__item-text main-text">@lang('portfolio.rental_app.description')</p>
                          <div class="portfolio__item-link">
                              <a href="#" class="link__item">
                                  <img
                                      src="assets/icons/arrow-right.svg"
                                      alt="Arrow"
                                      class="link__icon"
                                  />
                              </a>
                          </div>
                      </div>
                  </div>
                  <!-- /Portfolio Column -->
              </div>
          </div>
          <!-- /PORTFOLIO -->
      
          <!-- ICON for main__section bottom -->
          <img
              src="images/profession__before.svg"
              alt="Cervices"
              class="main__section-icons profession__before portfolio-page__after"
          />
      </div>
      
      
      
        <!-- /CONTAINER -->

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
