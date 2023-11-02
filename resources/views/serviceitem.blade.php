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
   <link rel="stylesheet" href="css/service-item.css" />
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
         <div class="service-item-page__banner page__banner-bg">
             <div class="container"> 
                 <div class="service-item-page">
                     <h1 class="service-item-page__title">@lang('cmd.title')</h1>
                     <div class="service-item-page__links">
                         <a href="{{ route('app', app()->getLocale()) }}" class="service-item-page__home">@lang('cmd.home')</a>
                         <span class="service-item-page__link-sign">
                             <i class="service-item-page__icon fa-solid fa-chevron-right" style="color: #ffffff"></i>
                         </span>
                         <a href="{{ route('services', app()->getLocale()) }}" class="service-item-page__link">@lang('cmd.services')</a>
                         <span class="service-item-page__link-sign">
                             <i class="service-item-page__icon fa-solid fa-chevron-right" style="color: #ffffff"></i>
                         </span>
                         <a href="{{ route('serviceitem', app()->getLocale()) }}">@lang('cmd.crm_platform')</a>
                     </div>
                 </div>
             </div>
         </div>
     </header>
     
      <!-- /HEADER -->

      <!--=============================================== Start MAIN section ===============================================-->
      <main class="main service-page">
         <div class="container">
            <!--=========================================== Start SERVICES section ===========================================-->
            <div class="services-wrapper">
               <!-- CRM platforma -->
               <div class="services-menu">
                  <div class="services-menu__items">
                     <a href="#" class="services-menu__item">
                        <span class="icon-container">
                           <img class="service-item-icon" src="assets/icons/Crm.png" alt="Crm">
                        </span>
                        <div class="service-menu__desc">
                           <h4 class="service-item-title service-active">@lang('cmd.crm_platform')</h4>
                           <p class="service-item-desc">@lang('cmd.crm_platform_desc')</p>
                        </div>
                     </a>
                     <!-- UX/UI Dizayn -->
                     <a href="#" class="services-menu__item">
                        <span class="icon-container">
                           <img class="service-item-icon" src="assets/icons/Ux-Ui.png" alt="Ui">
                        </span>
                        <div class="service-menu__desc">
                           <h4 class="service-item-title">@lang('cmd.ux_ui_design')</h4>
                           <p class="service-item-desc">@lang('cmd.ux_ui_design_desc')</p>
                        </div>
                     </a>
                     <!-- Veb-ishlab chiqish -->
                     <a href="#" class="services-menu__item">
                        <span class="icon-container">
                           <img class="service-item-icon" src="assets/icons/Web.png" alt="Web">
                        </span>
                        <div class="service-menu__desc">
                           <h4 class="service-item-title">@lang('cmd.web_development')</h4>
                           <p class="service-item-desc">@lang('cmd.web_development_desc')</p>
                        </div>
                     </a>
                     <!-- Mobil ilovalarni ishlab chiqish -->
                     <a href="#" class="services-menu__item">
                        <span class="icon-container">
                           <img class="service-item-icon" src="assets/icons/Mobile.png" alt="Crm">
                        </span>
                        <div class="service-menu__desc">
                           <h4 class="service-item-title">@lang('cmd.mobile_app_development')</h4>
                           <p class="service-item-desc">@lang('cmd.mobile_app_development_desc')</p>
                        </div>
                     </a>
                     <!-- Internet do’kon -->
                     <a href="#" class="services-menu__item">
                        <span class="icon-container">
                           <img class="service-item-icon" src="assets/icons/Web.png" alt="Web">
                        </span>
                        <div class="service-menu__desc">
                           <h4 class="service-item-title">@lang('cmd.online_store')</h4>
                           <p class="service-item-desc">@lang('cmd.online_store_desc')</p>
                        </div>
                     </a>
                     <!-- Kontent yozish -->
                     <a href="#" class="services-menu__item">
                        <span class="icon-container">
                           <img class="service-item-icon" src="assets/icons/CopyWriter.png" alt="Copyright">
                        </span>
                        <div class="service-menu__desc">
                           <h4 class="service-item-title">@lang('cmd.content_writing')</h4>
                           <p class="service-item-desc">@lang('cmd.content_writing_desc')</p>
                        </div>
                     </a>
                  </div>
               </div>
         
               <div class="services-info">
                  <div class="services-info-item">
                     <img class="service-info-img" src="images/Crm-service.png" alt="Crm service">
                     <h3 class="services-info-title">@lang('cmd.crm_platform_title')</h3>
                     <p class="services-info-text">@lang('cmd.crm_platform_info')</p>
                  </div>
                  <div class="services-info-item">
                     <img class="service-info-img" src="images/Crm-img.png" alt="Crm service">
                     <h3 class="services-info-title">@lang('cmd.crm_platform_benefits_title')</h3>
                     <p class="services-info-text">@lang('cmd.crm_platform_benefits_info')</p>
                  </div>
               </div>
            </div>
            <!-- /PORTFOLIO -->
         </div>
         
         <!-- /CONTAINER -->

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
      <div class="modal hide">
         <div class="modal__dialog">
             <div class="modal__content">
                 <div class="modal__wrapper">
                     <form class="modal__form" action="#">
                         <button class="modal__close">
                             <i class="fa-solid fa-xmark" style="color: #ffffff"></i>
                         </button>
                         <div class="modal__info">
                             <h3 class="modal__title">@lang('modal.title')</h3>
                             <p class="modal__text">@lang('modal.description')</p>
                         </div>
                         <div class="modal__row">
                             <div class="modal__name input__wrapper">
                                 <label for="modal__name" class="modal__label input__label">@lang('modal.name')</label>
                                 <input type="text" class="contact__input modal__name-item" id="modal__name" />
                             </div>
                             <div class="modal__email input__wrapper">
                                 <label for="modal__email" class="modal__label input__label">@lang('modal.phone')</label>
                                 <input type="email" class="contact__input modal__email-item" id="modal__email" />
                             </div>
                         </div>
                         <div class="modal__message input__wrapper">
                             <label for="modal__message" class="modal__label input__label">@lang('modal.message')</label>
                             <textarea rows="6" class="contact__input modal__message-item" id="modal__message"></textarea>
                         </div>
                         <button type="submit" class="modal__btn main-btn">@lang('modal.submit')</button>
                     </form>
                 </div>
             </div>
         </div>
     </div>
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