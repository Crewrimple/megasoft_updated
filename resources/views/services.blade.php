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
        <!-- Start PORTFOILIO banner -->
        <div class="services-page__banner page__banner-bg">
          <div class="container">
            <div class="services-page">
              <h1 class="services-page__title">Services</h1>
              <div class="services-page__links">
                <a href="index.html" class="services-page__home">Bosh sahifa</a>
                <span class="services-page__link-sign"
                  ><i
                    class="services-page__icon fa-solid fa-chevron-right"
                    style="color: #ffffff"
                  ></i
                ></span>
                <a href="services.html" class="services-page__link">Services</a>
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
                <div class="services-content__cards main-cards">
                  <div class="services__main-content">
                    <img
                      src="assets/icons/crm.svg"
                      alt="Crm platform"
                      class="services__cards-icon"
                    />
                    <h3 class="services__cards-title main-cards__title">
                      CRM platforma
                    </h3>
                    <p class="services__cards-desc main-text">
                      CRM Platforma-bu biznesga mijozlar bilan o’zaro
                      munosabatlari va munosabatlarni boshqarishda yordam
                      beruchi dasturiy ilovadir.
                    </p>
                  </div>
                  <a href class="services__cards-link">
                    <img
                      src="assets/icons/Arrow-circle.svg"
                      alt="Arrow"
                      class="arrow__icon"
                    />
                  </a>
                </div>
                <!-- *************************** -->
                <div class="services-content__cards main-cards">
                  <div class="services__main-content">
                    <img
                      src="assets/icons/fountain pen.svg"
                      alt="Crm platform"
                      class="services__cards-icon"
                    />
                    <h3 class="services__cards-title main-cards__title">
                      UX/UI Dizayn
                    </h3>
                    <p class="services__cards-desc main-text">
                      UI/UX dizayni har qanday foydalanuvchi interfeysining
                      dizayni bo’lib, unda qulaylik tashqi ko’rinish kabi
                      muhimdir.
                    </p>
                  </div>
                  <a href class="services__cards-link">
                    <img
                      src="assets/icons/Arrow-circle.svg"
                      alt
                      class="arrow__icon"
                    />
                  </a>
                </div>
                <!-- ****************************** -->
                <div class="services-content__cards main-cards">
                  <div class="services__main-content">
                    <img
                      src="assets/icons/web.svg"
                      alt="Crm platform"
                      class="services__cards-icon"
                    />
                    <h3 class="services__cards-title main-cards__title">
                      Veb-ishlab chiqish
                    </h3>
                    <p class="services__cards-desc main-text">
                      Veb-ishlab chiqish gazeta, dizayn va marketing sohalrini
                      o’z ichida mujassamlagan gibrid sohalardan biridir.
                    </p>
                  </div>
                  <a href class="services__cards-link">
                    <img
                      src="assets/icons/Arrow-circle.svg"
                      alt
                      class="arrow__icon"
                    />
                  </a>
                </div>
                <div class="services-content__cards main-cards">
                  <div class="services__main-content">
                    <img
                      src="assets/icons/Mobile.svg"
                      alt="Crm platform"
                      class="services__cards-icon"
                    />
                    <h3 class="services__cards-title main-cards__title">
                      Mobil ilovalarni ishlab chiqish
                    </h3>
                    <p class="services__cards-desc main-text">
                      Smartfon va planshetlar kabi mobil qurilmalarda ishlash
                      uchun maxsus ishlab chiqilgan dasturiy ilovalarni yaratish
                      jarayoni.
                    </p>
                  </div>
                  <a href class="services__cards-link">
                    <img
                      src="assets/icons/Arrow-circle.svg"
                      alt
                      class="arrow__icon"
                    />
                  </a>
                </div>
                <!-- *************************** -->
                <div class="services-content__cards main-cards">
                  <div class="services__main-content">
                    <img
                      src="assets/icons/WebStore.svg"
                      alt="Crm platform"
                      class="services__cards-icon"
                    />
                    <h3 class="services__cards-title main-cards__title">
                      Internet do’kon
                    </h3>
                    <p class="services__cards-desc main-text">
                      Internet-do’kon — elektron savdo-sotiq shakli, tovarlarni
                      Internet orqali sotishga mo’ljallangan veb-sayt.
                    </p>
                  </div>
                  <a href class="services__cards-link">
                    <img
                      src="assets/icons/Arrow-circle.svg"
                      alt
                      class="arrow__icon"
                    />
                  </a>
                </div>
                <!-- ****************************** -->
                <div class="services-content__cards main-cards">
                  <div class="services__main-content">
                    <img
                      src="assets/icons/Writer.svg"
                      alt="Crm platform"
                      class="services__cards-icon"
                    />
                    <h3 class="services__cards-title main-cards__title">
                      Kontent yozish
                    </h3>
                    <p class="services__cards-des main-text">
                      Veb-saytlar, bloglar, ijtimoiy media platformalari va
                      boshqalar kabi turli xil vositalar uchun yozma materiallar
                      yaratish jaryoni.
                    </p>
                  </div>
                  <a href class="services__cards-link">
                    <img
                      src="assets/icons/Arrow-circle.svg"
                      alt
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
              <h3 class="contact__title main-title">Savollaringiz bormi?</h3>
              <p class="contact__desc main-text">
                Bizga savol yoki murajatlaringiz bo’lsa yo’lashingiz mumkin. Biz
                sizga iloji boricha tezda javob berishga harakat qilamiz..
              </p>
              <span class="contact__details main-text">
                <i
                  class="details__icons fa-solid fa-phone-volume"
                  style="color: #ffffff"
                ></i>
                (201) 555-0124</span
              >
              <span class="contact__details main-text"
                ><i
                  class="details__icons fa-solid fa-envelope"
                  style="color: #ffffff"
                ></i
                >agish.studio@example.com</span
              >
              <span class="contact__details main-text"
                ><i
                  class="details__icons fa-solid fa-location-dot"
                  style="color: #ffffff"
                ></i
                >3891 Ranchview Dr. Richardson, California 62639</span
              >
            </div>
            <div class="contact__form">
              <form action="form">
                <div class="contact__row">
                  <div class="contact__name input__wrapper">
                    <label
                      for="contact__name"
                      class="contact__label input__label"
                      >Ism</label
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
                      >Email</label
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
                    >Xabar yozing</label
                  >
                  <textarea
                    rows="6"
                    class="contact__input contact__message-item"
                    id="contact__message"
                  ></textarea>
                </div>
                <button type="submit" class="contact__btn main-btn">
                  Yuborish
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
    <script src="assets/js/main.js"></script>
  </body>
</html>
