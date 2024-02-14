<footer class="bg-dark text-dark pt-5 pb-4">
            <div class="container">

                <h3 class="text-light">Sobre</h3>
                <hr class="border border-light border-2 opacity-50">
                <p class="text-light pt-5 pb-5 h4">
                    Unindo a nossa experiência no mercado no futebol, a vasta rede de contatos e a habilidade dos jogadores brasileiros, guiamos craques da América Latina para ligas como Premier League, La Liga e outras grandes organizações.
                </p>
                <h3 class="text-light">Notícias</h3>
                <hr class="border border-light border-2 opacity-50">
                <p class="pt-5 pb-5 h4">
                    Nenhuma notícia cadastrada até o momento.
                </p>
                <h3 class="text-light">Newsletter</h3>
                <hr class="border border-light border-2 opacity-50">
                <form>
                    <div>
                        <input type="name" class="form-control custom-placeholder pb-3 mb-3 rounded-0" id="name" placeholder="Nome">
                        <div id="emailHelp" class="form-text"></div>
                        <input type="email" class="form-control custom-placeholder pb-3 mb-3 rounded-0" id="email" aria-describedby="emailHelp" placeholder="Email">
                        <div id="emailHelp" class="form-text"></div>
                    </div>
                
                    <div class="d-grid gap-2">
                        <button class="btn btn-warning btn-outline-dark border-warning custom-placeholder mb-5 rounded-0" type="button">Enviar</button>
                    </div>
                </form>
                                
            </div>
            <hr class="border border-light border-1 mt-5">
            <div class="container">
                <div class="text-start">
                    <h5 class="text-light">2023 FKA Sports. All Rights Reserved.</h5>
                </div>
            </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var myCarousel = document.getElementById('carouselExampleIndicators');
                myCarousel.addEventListener('slid.bs.carousel', function () {
                    var h1Element = document.querySelector('.carousel-item.active #anim-left-right-slide2');
                    if (h1Element) {
                        h1Element.classList.add('slide-in');
                    }
                    document.querySelectorAll('.right-left-p-text').forEach(function(text) {
                        text.classList.remove('slide-in');
                    });
                    setTimeout(function() {
                        document.querySelector('.carousel-item.active .right-left-p-text').classList.add('slide-in');
                    }, 50);
                });
            });
        </script>
        <script>
            // Adiciona a classe slide-in após um pequeno atraso para iniciar a animação
            setTimeout(function() {
                document.querySelector('.anim-left-right').classList.add('slide-in');
            }, 100);
        </script>

        <script>
            window.onscroll = function() {scrollFunction()};

            function scrollFunction() {
                var header = document.querySelector('header');
                var menuNav = document.getElementById('menuNav');

                if (document.body.scrollTop > header.offsetHeight || document.documentElement.scrollTop > header.offsetHeight) {
                    menuNav.classList.add("fixed-top");
                } else {
                    menuNav.classList.remove("fixed-top");
                }
            }
        </script>    
    </body>
</html> 
