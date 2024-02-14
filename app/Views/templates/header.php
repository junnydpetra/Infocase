<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Réplica Layout</title>
        <link rel="icon" href="img/icon.png">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

        <style>
            .carousel-item img.d-block {
                filter: brightness(40%); /* Escurece as imagens */
            }

            #anim-texto-cima-baixo1-slide1 {
                position: absolute;
                top: -100%; /* Posiciona o texto fora do slide acima */
                left: 40%;
                transform: translateX(-50%);
                color: white; /* Cor do texto */
                transition: top 1.5s ease; /* Adiciona transição para animação */
                font-size: 70px;
            }
            .carousel-item.active #anim-texto-cima-baixo1-slide1,
            .carousel-item.anim-texto-cima-baixo1-slide1 {
                top: 15%; /* Move o texto para a posição inicial */
            }

            #anim-texto-cima-baixo-slide3 {
                position: absolute;
                top: -100%; /* Ajuste a posição conforme necessário */
                left: 40%;
                transform: translateX(-50%);
                color: white; /* Cor do texto */
                transition: top 1.5s ease; /* Adiciona transição para animação */
                font-size: 60px;
            }
            .carousel-item.active #anim-texto-cima-baixo-slide3,
            .carousel-item.anim-texto-cima-baixo-slide3 {
                top: 2%; /* Move o texto para a posição inicial */
            }

            /* Para o parágrafo do slide 3 */
            #anim-p-cima-baixo-slide3 {
                position: absolute;
                top: -100%; /* Posiciona o texto fora do slide acima */
                left: 50%; /* Ajuste conforme necessário */
                transform: translate(-50%, 0);
                color: white; /* Cor do texto */
                transition: top 1.5s ease; /* Adiciona transição para animação */
                font-size: 25px; /* Tamanho da fonte */
                opacity: 0; /* Esconde o texto inicialmente */
            }

            .carousel-item.active #anim-p-cima-baixo-slide3,
            .carousel-item.anim-p-cima-baixo-slide3 {
                top: 40%; /* Move o texto para a posição inicial */
                opacity: 1; /* Mostra o texto */
            }

            .anim-right-left {
                position: absolute;
                top: 0;
                padding-left: 10%;
                right: -100%; /* Posiciona a imagem secundária fora do slide à esquerda */
                transition: right 0.5s ease; /* Adiciona transição para animação */
            }
            .carousel-item.active .anim-right-left {
                right: 0; /* Move a imagem secundária para a posição inicial quando o slide estiver ativo */
                margin-right: 20px;
            }            
            .carousel-item.active .anim-right-left, /* Aplica a animação apenas quando o slide estiver ativo */
            .carousel-item.anim-right-left {
                right: 0; /* Move a imagem secundária para a posição inicial */
            }
            .right-left-p-text {
                position: absolute;
                top: 70%;
                left: 100%; /* Inicia o texto à direita */
                transform: translate(-80%, -50%);
                transition: left 1.5s ease; /* Adiciona a transição */
                font-size: 25px;
                opacity: 0; /* Esconde o texto inicialmente */
            }

            .right-left-p-text.slide-in {
                left: 50%; /* Move o texto para a posição correta */
                opacity: 1; /* Mostra o texto */
            }
            .right-left-p-text2 {
                position: absolute;
                top: 30%;
                left: 100%; /* Inicia o texto à direita */
                transform: translate(-80%, -50%);
                transition: left 1.5s ease; /* Adiciona a transição */
                font-size: 25px;
                opacity: 0; /* Esconde o texto inicialmente */
            }

            .right-left-p-text2.slide-in {
                left: 50%; /* Move o texto para a posição correta */
                opacity: 1; /* Mostra o texto */
            }

            .facebook-icon, .twitter-icon, .google-icon, .linkedin-icon {
                font-size: 1.2em; /* Ajuste o tamanho dos ícones conforme necessário */
                margin-right: 1em; /* Adicione espaço entre os ícones */
            }

            #secondary-img1 {
                position: absolute; 
                height: 90%;
                padding-top: 2%;
                padding-right: 15%;
            }

            #secondary-img2 {
                position: absolute; 
                height: 68%;
                padding-top: 0;
                padding-right: 15%;
            }

            #anim-left-right-slide2 {
                position: absolute;
                left: -100%; /* Inicia o texto à direita */
                top: 30%; /* Ajuste conforme necessário */
                transform: translate(0, -50%);
                transition: left 1.5s ease; /* Adiciona a transição */
                font-size: 65px;
                opacity: 0; /* Esconde o texto inicialmente */
            }

            .carousel-item.active #anim-left-right-slide2.slide-in {
                left: 5%; /* Move o texto para a posição correta */
                opacity: 1; /* Mostra o texto */
            }
            
            #right-left-p-text-slide2 {
                position: absolute;
                top: 60%; /* Ajuste conforme necessário */
                left: 100%; /* Inicia o texto à direita */
                transform: translate(-80%, -50%);
                transition: left 1.5s ease; /* Adiciona a transição */
                font-size: 25px;
                opacity: 0; /* Esconde o texto inicialmente */
            }

            #right-left-p-text-slide2.slide-in {
                left: 50%; /* Move o texto para a posição correta */
                opacity: 1; /* Mostra o texto */
            }

            .custom-placeholder {
                font-size: 16px;
                font-weight: bold;
                line-height: 3;
            }

            /* Para o parágrafo do slide 3 */
            #right-left-p-text-slide3 {
                position: absolute;
                top: 55%;
                left: 100%; /* Inicia o texto à direita */
                transform: translate(-80%, -50%);
                transition: left 1.5s ease; /* Adiciona a transição */
                font-size: 25px; /* Tamanho da fonte */
                opacity: 0; /* Esconde o texto inicialmente */
            }

            #right-left-p-text-slide3.slide-in {
                left: 50%; /* Move o texto para a posição correta */
                opacity: 1; /* Mostra o texto */
            }

        </style>

    </head>

    <body>