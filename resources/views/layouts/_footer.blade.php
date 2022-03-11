<footer class="py-5 sticky-bottom">
    <div class="container">
        <div class="row d-flex justify-content-center me-2 me-0 mb-5">
            <div class="col-6 col-md-3">
                <h5>{{ __('ui.footerhead1') }}</h5>
                <ul class="nav flex-column mt-3">
                    <li class="nav-item mb-2"><a href="{{ route('welcome') }}" class="nav-link p-0 text-black">{{ __('ui.footerhead1a') }}</a></li>
                    <li class="nav-item mb-2"><a>{{ __('ui.footerhead1b') }}</a></li>
                    <li class="nav-item mb-2"><a href="{{ route('ad.new') }}" class="nav-link p-0 text-black">{{ __('ui.footerhead1c') }}</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-black">{{ __('ui.footerhead1d') }}</a></li>
                </ul>
            </div>
            <div class="col-6 col-md-3 contacto">
                <h5>{{ __('ui.footerhead2a') }}</h5>
                <ul class="nav flex-column mt-3">
                    <li class="nav-item mb-2"><a href="{{ route('about') }}" class="nav-link p-0 text-black">{{ __('ui.footerhead2b') }}</a></li>
                    <li class="nav-item mb-2"><a href="{{ route('contact') }}" class="nav-link p-0 text-black">{{ __('ui.footerhead2c') }}</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-black">{{ __('ui.footerhead2d') }}</a></li>
                </ul>
            </div>
            <div class="col-4 col-md-3 newsletter d-none d-lg-block">
                <form>
                    <h5>{{ __('ui.footerhead3a') }}</h5>
                    <p>{{ __('ui.footerhead3b') }}</p>
                    <div class="d-flex justify-content-end w-100 gap-2">
                        <label for="newsletter1" class="visually-hidden">E-mail</label>
                        <input id="newsletter1" type="text" class="form-control d-none d-lg-block">
                        <button class="btn me-1 fw-bold d-none d-lg-block" type="button" style="background-color:#F0A646">{{ __('ui.footerhead3boton') }}</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="d-flex justify-content-center align-items-center mt-2 border-top">
            <a class="navbar-brand" href="#"><svg id="logo-38" width="78" height="32" viewBox="0 0 78 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M55.5 0H77.5L58.5 32H36.5L55.5 0Z" class="ccustom" fill="#A1C6EA"></path>
                <path d="M35.5 0H51.5L32.5 32H16.5L35.5 0Z" class="ccompli1" fill="rgb(240, 166, 70)"></path>
                <path d="M19.5 0H31.5L12.5 32H0.5L19.5 0Z" class="ccompli2" fill="#04080F"></path>
            </svg></a>
            <p class="d-flex justify-content-center mt-4">© 2022 Rapido, Co.</p>
        </div>
    </div>
</footer>

