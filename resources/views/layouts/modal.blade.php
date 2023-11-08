<div class="modal hide">
    <div class="modal__dialog">
      <div class="modal__content">
        <div class="modal__wrapper">
           <form class="modal__form" action="/process-form" method="post">
                @csrf
                @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
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
                        <input type="text" class="contact__input modal__name-item" id="modal__name" name="name" />
                    </div>
                    <div class="modal__email input__wrapper">
                        <label for="modal__email" class="modal__label input__label">@lang('modal.phone')</label>
                        <input type="email" class="contact__input modal__email-item" id="modal__email" name="email" />
                    </div>
                </div>
                <div class="modal__message input__wrapper">
                    <label for="modal__message" class="modal__label input__label">@lang('modal.message')</label>
                    <textarea rows="6" class="contact__input modal__message-item" id="modal__message" name="message"></textarea>
                </div>
                <button type="submit" class="modal__btn main-btn">@lang('modal.submit')</button>
            </form>
        </div>
    </div>
</div>
