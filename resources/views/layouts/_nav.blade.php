<nav id="nav" class="navbar navbar-expand-md navbar-light fixed-top" aria-label="Fourth navbar example">
    <div class="container-fluid">
        {{-- <svg id="logo-38" width="78" height="32" viewBox="0 0 78 32" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M55.5 0H77.5L58.5 32H36.5L55.5 0Z" class="ccustom" fill="#A1C6EA"></path>
            <path d="M35.5 0H51.5L32.5 32H16.5L35.5 0Z" class="ccompli1" fill="rgb(240, 166, 70)"></path>
            <path d="M19.5 0H31.5L12.5 32H0.5L19.5 0Z" class="ccompli2" fill="#04080F"></path>
        </svg> --}}
        {{-- <a class="navbar-brand fw-bold fs-5 fst-italic" href="{{ route('welcome') }}">RAPIDO.ES</a> --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04"
        aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarsExample04">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item m-2">
                <a class="nav-link active fw-bold fs-5 text-uppercase" aria-current="page" href="{{ route('welcome') }}">{{ __('ui.home') }}</a>
            </li>
            {{-- <li class="nav-item m-2">
                <a class="nav-link active fw-bold fs-5" href="{{ route('about') }}">{{ __('ui.aboutus') }}</a>
            </li> --}}
            <li class="nav-item m-2">
                <a class="nav-link active fw-bold fs-5 text-uppercase" href="{{ route('contact') }}">{{ __('ui.contact') }}</a>
            </li>
            <li class="nav-item m-2 dropdown">
                <a class="nav-link active fw-bold fs-5 dropdown-toggle" href="#" id="dropdown04"
                data-bs-toggle="dropdown" aria-expanded="false">{{ __('ui.categories') }}</a>
                <ul class="dropdown-menu" aria-labelledby="dropdown04">
                    @foreach ($categories as $category)
                    <li><a class="dropdown-item"
                        href="{{route('category.ads',['name'=>$category->name,'id'=>$category->id])}}">{{__("ui.{$category->name}")}}</a>
                    </li>
                    @endforeach
                </ul>
            </li>
            <li class="nav-item m-2 dropdown list-unstyled">
                <a class="nav-link active fw-bold fs-5 text-uppercase dropdown-toggle" href="#" id="dropdown04"
                data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-globe"></i></a>
                <ul class="dropdown-menu" aria-labelledby="dropdown04">
                    <li class="d-flex align-items-center justify-content-center">
                        <div>
                            @include('layouts._locale',["lang"=>'es','nation'=>'es'])
                        </div>
                        <span>ES</span>
                    </li>
                    <li class="d-flex align-items-center justify-content-center">
                        <div>
                            @include('layouts._locale',["lang"=>'en','nation'=>'gb'])
                        </div>
                        <span>EN</span>
                    </li>
                    <li class="d-flex align-items-center justify-content-center">
                        <div>
                            @include('layouts._locale',["lang"=>'it','nation'=>'it'])
                        </div>
                        <span>IT</span>
                    </li>
                </ul>
            </li>
            
            @auth
            @if (Auth::user()->is_revisor)
            <li class="nav-item m-2">
                <a class="nav-link active fs-5 text-uppercase" href="{{ route('revisor.home') }}">{{ __('ui.revisor') }}
                    <span class="badge rounded-pill bg-danger">{{\App\Models\Ad::ToBeRevisionedCount() }}</span>
                </a>
            </li>
            @endif
            @endauth
        </ul>
        @guest
        {{-- <li class="nav-item list-unstyled">
            <button class="btn botonanuncio"><a class="nav-link fw-bold fs-5 text-black" href="{{ route('ad.new') }}">{{ __('ui.createanewad') }}</a></button>
        </li> --}}
        <li class="nav-item list-unstyled">
            <a class="nav-link active fw-bold fs-5 text-uppercase text-reset" href="{{ route('login') }}">{{ __('ui.login') }}</a>
        </li>
        <li class="nav-item list-unstyled">
            <a class="nav-link active fs-5 fw-bold text-uppercase text-reset" href="{{ route('register') }}">{{ __('ui.register') }}</a>
        </li>
        @endguest
        @auth
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <li class="nav-item list-unstyled">
                <a class="nav-link active fs-5 text-uppercase text-danger" href="">{{auth()->user()->name}}</a>
                <button class="btn btn-search fw-bold fs-5" type="submit">{{ __('ui.logout') }}</button>
            </li>
        </form>
        @endauth
        
        
        
        
    </div>
</div>
</nav>
