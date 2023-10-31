
<header class="header">    
    <div class="container">
      <!-- Start HEADER-BANNER section  -->
      <div class="header-banner">
        <div class="banner__text">
          <div class="banner__title">
            @lang('banner.banner_h1')
            
            <div class="banner__bg">
              <img
                src="images/Group__before.svg"
                alt="Before"
                class="banner__bg-item"
              />
            </div>
          </div>
          <div class="banner__info">
            @lang('banner.banner_info')
            
          </div>
        </div>

        <div class="header-banner-img">
          <img
            src="images/banner-image.png"
            alt="Banner image"
            class="header-banner-img__item"
          />

          <span class="header__bg-scrolling"></span>

          <img            
            src="assets/icons/Scrolling-Text.svg"
            alt="Ellipse"
            class="header-banner__ellipse"
          />

          <img
            src="assets/icons/arrow-up.svg"
            alt="Arrow"
            class="header-banner__arrow"
          />
        </div>
      </div>
      <!-- /FOOTER-BANNER -->
    </div>
  </header>

<script>
    function changeLang(lang) {
        let urls = '/locale/' + lang.value;
        window.location.href = urls;
    }
</script>
