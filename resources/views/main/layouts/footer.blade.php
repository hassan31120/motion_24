    <!--footer-->
    <h1 class="text-center" id="contactUs"></h1>
    <div class="container-fluid" id="footer">
        <footer class="fw-bold">
            <div class="container">
                @yield('footer_item')
                <div class="copyright-area">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-6 col-lg-6 ">
                                <div class="copyright-text ">
                                    <p class=" text-light">حقوق الطبع والنشرCopyright &copy; لعام2022 محفوظة ل<strong
                                            style="color:rgb(31, 92, 92)">مؤسسة المنى ومنصة 24 تك</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </footer>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    {{-- <script src="https://unpkg.com/aos@next/dist/aos.js"></script> --}}
    {{-- <script src="./js/jquery/jquery-3.4.1.min.js"></script> --}}
    <script src="{{ asset('main/js/index.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.customer-logos').slick({
                slidesToShow: 5,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 1250,
                arrows: false,
                dots: false,
                pauseOnHover: false,
                responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2
                    }
                }, {
                    breakpoint: 520,
                    settings: {
                        slidesToShow: 2
                    }
                }]
            });
        });
    </script>
    </body>

    </html>
