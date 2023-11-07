<main class="main">
  <!--============================================ Sart MAIN__SECTION section ============================================-->
  <section id="main__section">
    <!--============================================ Sart CONTAINER section ============================================-->
    <div class="container">
      <!-- ICON for main__section top -->
      <img
        src="images/Cervices__before.svg"
        alt="Cervices"
        class="main__section-icons cervices__before"
      />
      <!--=========================================== Start SERVICES Section ===========================================-->
      <!-- Services Section -->
<div class="services">
  <div class="services-info">
    <h2 class="services-info__title main-title">
      @lang('main.services_title')
    </h2>
    <p class="services-desc main-text">
      @lang('main.services_description')
    </p>
  </div>
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
        <a href="{{ route('services') }}" class="services__cards-link">
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


      
<div class="container">
  <!--=========================================== Start PORTFOLIO section ===========================================-->
  <div class="portfolio">
    <div class="portfolio__info">
      <h3 class="portfolio__title main-title">@lang('main.our_portfolio_title')</h3>
      <p class="portfolio__desc main-text">
        @lang('main.our_portfolio_description')
      </p>
    </div>
  
    <!-- Portfolio content -->
    <div class="portfolio__content">
      <!-- Portfolio Column -->
      <div class="portfolio__col">
        <!-- Portfolio item -->
        <div class="portfolio__item">
          <div class="portfolio__img-wrapper">
            <a href="{{ route('portfolio') }}" class="portfolio__link-img">
              <img
                src="images/Food-delivery.jpg"
                alt="Food Delivery"
                class="portfolio__item-img"
              />
            </a>
          </div>
          <h4 class="portfolio__item-title">@lang('main.portfolio_item1_title')</h4>
          <p class="portfolio__item-text main-text">
            @lang('main.portfolio_item1_description')
          </p>
          <div class="portfolio__item-link">
            <a href="{{ route('portfolio') }}" class="link__item">
              <img
                src="assets/icons/arrow-right.svg"
                alt="Arrow"
                class="link__icon"
              />
            </a>
          </div>
        </div>
        <!-- Portfolio item -->
        <div class="portfolio__item">
          <div class="portfolio__img-wrapper snikers">
            <a href="{{ route('portfolio') }}" class="portfolio__link-img">
              <img
                src="images/News-app.jpg"
                alt="News Mobile App"
                class="portfolio__item-img"
              />
            </a>
          </div>
          <h4 class="portfolio__item-title">@lang('main.portfolio_item2_title')</h4>
          <p class="portfolio__item-text main-text">
            @lang('main.portfolio_item2_description')
          </p>
          <div class="portfolio__item-link">
            <a href="{{ route('portfolio') }}" class="link__item">
              <img
                src="assets/icons/arrow-right.svg"
                alt="Arrow"
                class="link__icon"
              />
            </a>
          </div>
        </div>
      </div>
  
      <!-- Portfolio__column -->
      <div class="portfolio__col">
        <!-- Portfolio item -->
        <div class="portfolio__item">
          <div class="portfolio__img-wrapper">
            <a href="{{ route('portfolio') }}" class="portfolio__link-img">
              <img
                src="images/medical.jpg"
                alt="Medical Healthcare Website"
                class="portfolio__item-img"
              />
            </a>
          </div>
          <h4 class="portfolio__item-title">@lang('main.portfolio_item3_title')</h4>
          <p class="portfolio__item-text main-text">
            @lang('main.portfolio_item3_description')
          </p>
          <div class="portfolio__item-link">
            <a href="{{ route('portfolio') }}" class="link__item">
              <img
                src="assets/icons/arrow-right.svg"
                alt="Arrow"
                class="link__icon"
              />
            </a>
          </div>
        </div>
        <!-- Portfolio item -->
        <div class="portfolio__item">
          <div class="portfolio__img-wrapper snikers">
            <a href="{{ route('portfolio') }}" class="portfolio__link-img">
              <img
                src="images/E-Commers.jpg"
                alt="Beauty E-Commerce Website"
                class="portfolio__item-img"
              />
            </a>
          </div>
          <h4 class="portfolio__item-title">@lang('main.portfolio_item4_title')</h4>
          <p class="portfolio__item-text main-text">
            @lang('main.portfolio_item4_description')
          </p>
          <div class="portfolio__item-link">
            <a href="{{ route('portfolio') }}" class="link__item">
              <img src="assets/icons/arrow-right.svg" alt="Arrow" class="link__icon" />
          </a>
          
          </div>
        </div>
      </div>
      <!-- ************************************************ -->
    </div>
  </div>
  <!-- /PORTFOLIO -->
  
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
          <form action="{{ route('form.submit') }}" method="POST">
            @csrf
          @lang('main.send')
        </button>
      </form>
    </div>
  </div>
  <!-- /CONTACT -->
  </div>
  <!-- /CONTAINER -->
  </main>