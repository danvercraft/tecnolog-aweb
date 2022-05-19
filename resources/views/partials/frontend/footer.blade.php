<footer class="footer-area fruits-footer">
    <div class="food-footer-bottom pt-80 pb-70 black-bg-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="footer-widget">
                        <div class="food-about">
                            <p>Online Shop</p>
                            <div class="food-about-info">
                                <div class="food-info-wrapper">
                                    <div class="food-address">
                                        <div class="food-info-icon">
                                            <i class="pe-7s-map-marker"></i>
                                        </div>
                                        <div class="food-info-content">
                                            <p>D' Volada</p>
                                        </div>
                                    </div>
                                    <div class="food-address">
                                        <div class="food-info-icon">
                                            <i class="pe-7s-call"></i>
                                        </div>
                                        <div class="food-info-content">
                                            <p>+51 951530040</p>
                                        </div>
                                    </div>
                                    <div class="food-address">
                                        <div class="food-info-icon">
                                            <i class="pe-7s-chat"></i>
                                        </div>
                                        <div class="food-info-content">
                                            <p>
                                                <a href="">ventas@dvolada.com</a> <br>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2">
                    <div class="footer-widget mt-50">
                        <h3 class="footer-widget-title-6">Opciones</h3>
                        <div class="food-widget-content">
                            <ul>
                                <li><a href="{{ route('cart.index') }}"><img
                                            src="{{ asset('frontend/img/icon-img/41.png') }}" alt="hhhhhh">D' Volada</a></li>
                                <li>
                                    <a href="{{ route('user.dashboard') }}"><img src="{{ asset('frontend/img/icon-img/41.png') }}" alt="">
                                        Mi cuenta</a>
                                </li>
                                @guest
                                    @if (route('register'))
                                        <li>
                                            <a href="{{ route('register') }}">
                                                <img src="{{ asset('frontend/img/icon-img/41.png') }}" alt="">
                                                Registraarse
                                            </a>
                                        </li>
                                    @endif
                                @endguest
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="footer-widget mt-50">
                        <h3 class="footer-widget-title-6">Informacion</h3>
                        <div class="food-widget-content">
                            <ul>
                                <li>
                                    <a href="{{ route('contact.index') }}">
                                        <img src="{{ asset('frontend/img/icon-img/41.png') }}" alt="">
                                        Sobre Nosotros
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('contact.index') }}">
                                        <img src="{{ asset('frontend/img/icon-img/41.png') }}" alt="">
                                        Contactanos
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('page.show', 'privacy-policy') }}">
                                        <img src="{{ asset('frontend/img/icon-img/41.png') }}" alt="">
                                        Políticas de Privacidad
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="food-copyright black-bg-6 ptb-30">
        <div class="container text-center">
            <p class="copyright text-center">
                ©
                <script>
                    document.write(new Date().getFullYear())
                </script>
                Created by
                <a href="" target="_blank" class="text-primary">Danvercraft Perú</a>
            </p>
        </div>
    </div>
</footer>


