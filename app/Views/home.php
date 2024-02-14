<header class="p-2 text-bg-warning">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li class="nav-item d-flex align-items-center">
                    <i class="fas fa-envelope me-1"></i>
                    <a href="mailto:email@email.com.br" class="nav-link text-dark fs-4 text">email@email.com.br</a>
                </li>
            </ul>

            <ul class="nav col-12 col-lg-auto ms-lg-auto mb-2 justify-content-center mb-md-0">
                <li class="nav-item">
                    <i class="fab fa-facebook-square facebook-icon"></i>
                    <i class="fab fa-twitter-square twitter-icon"></i>
                    <i class="fab fa-google-plus-square google-icon"></i>
                    <i class="fab fa-linkedin linkedin-icon"></i>
                </li>
            </ul>
        </div>
    </div>
</header>   

<div id="menuNav" class="container-fluid bg-black py-2 px-2">
    <div class="container px-5">
        <div class="row align-items-center">
            <div class="col-lg-4">
                <a href="index.html"><img src="assets/img/logo.png" alt="logo"></a>
            </div>
            <div class="col-lg-8">
                <nav class="navbar navbar-expand-lg navbar-dark">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><h4 class="text-light">Início</h4></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><h4 class="text-light">Teste</h4></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><h4 class="text-light">Jogadores</h4></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><h4 class="text-light">Galeria</h4></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><h4 class="text-light">Mídia Kit</h4></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><h4 class="text-light">Contato</h4></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>

<!-- Slider -->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="assets/img/sld1.jpg" class="d-block w-100" alt="imagem1">
            <img src="assets/img/player.png" class="d-none d-xl-block anim-right-left" id="secondary-img1" alt="imagem3_secundaria">
            <h1 class="text-capitalize" id="anim-texto-cima-baixo1-slide1">Uma jogada bem agenciada pode mudar sua história</h1>
            <p class="right-left-p-text text-light d-none d-xl-block">Gerenciamos carreiras de craques do futebol: Da base ao profissional, do primeiro chute ao gol da vitória. Com o comprometimento que o seu sonho merece.</p>
        </div>
        <div class="carousel-item">
            <img src="assets/img/sld2.png" class="d-block w-100" alt="imagem2">
            <h1 id="anim-left-right-slide2" class="text-capitalize text-light">Criando oportunidades e soluções <br> para atletas</h1>
            <p id="right-left-p-text-slide2" class="right-left-p-text text-light pt-5 d-none d-xl-block slide-in">É comprovado: Atletas representados por agentes têm salários melhores e contratos mais duradouros. Confie em nosso trabalho e alcance o sucesso que você merece no mundo do futebol. <br></p>
        </div>
        <div class="carousel-item">
            <img src="assets/img/sld3.png" class="d-block w-100" alt="imagem3">
            <img src="assets/img/player2.png" class="d-none d-xl-block anim-right-left small-secondary-img" id="secondary-img2" alt="imagem3_secundaria">
            <h1 class="text-capitalize" id="anim-texto-cima-baixo-slide3">A vitória é garantida para quem se dedica</h1>
            <p id="right-left-p-text-slide3" class="right-left-p-text text-light pt-5 d-none d-xl-block slide-in">A FKA está sempre em busca de novos talentos que querem vencer e desejam crescer mais do que seus próprios sonhos. Se você é um atleta que tem essa ambição, então a FKA é o lugar ideal para você. Acreditamos que cada atleta tem um potencial único e procuramos desenvolver esse potencial ao máximo para alcançar grandes feitos nos esportes. Acreditamos que o sucesso vem daqueles que se esforçam e estão determinados a alcançar seus objetivos. Se você é um desses atletas entre em contato conosco.</p>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!-- Slider Fim -->

<main>
    <div class="container p-5">
        <h2>Últimas notícias</h2>
        <p class="right-left-p-text text-light pt-5">Nenhuma notícia cadastrada até o momento.</p>
    </div>
</main>

