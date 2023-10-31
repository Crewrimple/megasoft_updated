<footer class="footer">
    <div class="container">
        <div class="footer__link">
            <div class="footer__logo site-logo">
                <a href="{{ route('app') }}" class="logo__item">
                    <img src="assets/icons/site-logo.svg" class="site-logo footer__logo-img">
                </a>
            </div>

            <!-- Social Media Links -->
            <div class="footer__media">
                <a href="#"><i class="fa-brands fa-facebook-f" style="color: #ffffff"></i></a>
                <a href="#"><i class="fa-brands fa-instagram" style="color: #ffffff"></i></a>
                <a href="#"><i class="fa-brands fa-twitter" style="color: #ffffff"></i></a>
            </div>
            <!-- /Social Media Links -->

            <!-- Footer Menu -->
            <ul class="footer__menu">
                <li class="footer__menu-list"><a href="{{ route('app') }}" class="footer__menu-link">@lang('footer.home')</a></li>
                <li class="footer__menu-list"><a href="{{ route('about') }}" class="footer__menu-link">@lang('footer.about')</a></li>
                <li class="footer__menu-list"><a href="{{ route('portfolio') }}" class="footer__menu-link">@lang('footer.portfolio')</a></li>
                <li class="footer__menu-list"><a href="{{ route('services') }}" class="footer__menu-link">@lang('footer.services')</a></li>
                <li class="footer__menu-list"><a href="{{ route('contact') }}" class="footer__menu-link">@lang('footer.contact')</a></li>
            </ul>
            <!-- /Footer Menu -->
        </div>

        <div class="footer__bottom">
            <p class="footer__desc">@lang('footer.copyright')</p>
            <div class="footer__bottom-link">
                <a href="{{ url('conditions') }}">@lang('footer.terms')</a>
                <a href="{{ url('privacy') }}">@lang('footer.privacy')</a>
            </div>
        </div>
    </div>
</footer>
