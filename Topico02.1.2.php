<?php
// HEADER
include('layout/header.php');
?>

<body>
    <!-- PLUGIN DO FADE IN -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <!-- MENU -->
    <?php include('layout/menu.php') ?>

    <div id="main">
        <!-- NAV TOP -->
        <?php include('layout/nav.php') ?>
        <!-- CONTEUDO INICIO -->

        <div class="main-content container-fluid">
            <div class="page-title">
                <h2 class="font-bold">2.1.2. Contexto de uso</h2>
                <hr>

                <p class="Texto">O contexto de uso envolve investigar a interação de pessoas com sistemas levando em conta a cultura, a sociedade, a organização e a linguagem. Assim como lidamos com os fenômenos da natureza, no contexto de uso entendemos as diferenças entre como as pessoas utilizam os sistemas computacionais e os dispositivos de acordo com seu contexto de uso.</p>

                <p class="Texto">Um problema comum no desenvolvimento de sistemas está ligado ao fato de que a equipe que desenvolve não está no contexto de uso do sistema e pode inferir de forma errada como alguém irá interagir com o sistema. As <strong>Figuras 7 e 7.1</strong> mostra como estes mundos podem ser distintos.</p>


                <p class="TituloFigura text-center pr-5">
                    Contexto de uso x Contexto de Desenvolvimento.
                </p>

                <div class="row">
                    <div class="col">
                        <div class="text-center">
                            <p class="TituloFigura"><strong>Figura 7:</strong> Contexto de uso </p>
                            <a href="imagens/Figura07.png" data-toggle="lightbox" data-footer="Contexto de uso ">
                                <img class="img-fluid wow fadeInLeft" src="imagens/Figura07.png" alt="Figura 07 - Contexto de uso ">
                            </a>
                            <p class="FonteFigura">Fonte: Vídeo do Instituto Socioambiental</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="text-center">
                            <p class="TituloFigura"><strong>Figura 7.1:</strong> Contexto de desenvolvimento </p>
                            <a href="imagens/Figura07.1.png" data-toggle="lightbox" data-footer="Contexto de desenvolvimento ">
                                <img class="img-fluid wow fadeInRight" src="imagens/Figura07.1.png" alt="Figura 07 - Contexto de desenvolvimento ">
                            </a>
                            <p class="FonteFigura">Fonte: Pexels</p>
                        </div>
                    </div>
                </div>
                <hr>

                <p class="Texto">
                    De acordo com o contexto, um sistema pode utilizar uma linguagem mais formal ou menos formal. Esta também é uma decisão de design. Veja na <strong>Figura 8</strong> três exemplos de recursos de linguagem: (1) uma linguagem informal para um site de intercâmbio, (2) uma linguagem mais amigável para informar um erro no Google Chrome e (3) uma linguagem conversacional para a ferramenta Paper do Dropbox . Veja que cada exemplo está dentro de um contexto de uso e possivelmente a escolha das palavras foi uma decisão tomada no momento do planejamento do sistema. Isto pode acontecer para se aproximar do público-alvo, como no primeiro exemplo da agência de intercâmbio ao apresentar uma linguagem mais jovem, ou para facilitar o uso, como no exemplo do Paper.
                </p>

                <div class="text-center">
                    <p class="TituloFigura"><strong>Figura 8:</strong> Linguagens e contextos de uso</p>
                    <a href="imagens/Figura08.png" data-toggle="lightbox" data-footer="Abordagens de desenvolvimento">
                        <img class="img-fluid wow fadeInDown" src="imagens/Figura08.png" alt="Figura 8 - Linguagens e contextos de uso">
                    </a>
                    <br><br>
                    <a href="imagens/Figura08.1.png" data-toggle="lightbox" data-footer="Abordagens de desenvolvimento">
                        <img class="img-fluid wow fadeIn" src="imagens/Figura08.1.png" data-wow-delay="0.6s" alt="Figura 8 - Linguagens e contextos de uso">
                    </a>
                    <br><br>
                    <a href="imagens/Figura08.2.png" data-toggle="lightbox" data-footer="Abordagens de desenvolvimento">
                        <img class="img-fluid wow fadeInUp" src="imagens/Figura08.2.png" alt="Figura 8 - Linguagens e contextos de uso">
                    </a>
                    <p class="FonteFigura">Fontes: (1) Worldpackers e (2) Google Chrome e (3) Dropbox Paper</p>
                </div>
                <hr>

                <p class="Texto"> O contexto de uso pode destacar uma cultura, como mostra o artigo científico “<em>Kawaii/ Interação fofa</em>", do inglês “<em>Kawaii/Cute Interactive Media</em>”, (Cheok, 2010). Se você já teve contato com cultura japonesa possivelmente já ouviu falar sobre o termo Kawaii. De acordo com o artigo, a aplicação de elementos considerados fofos em sistemas interativos tem raízes na estética de muitos elementos históricos e culturais, como a cultura japonesa Kawaii. Nesse estudo o autor percebeu que há uma correlação entre o que se percebe como atraente e bonito em interfaces com a presença de elementos fofos. Esta é uma forma de mostrar a ligação do design à cultura.</p><hr>

                <div>
                    <p class="CuriosidadeTitulo"> Curiosidade</p>
                    <p class="CuriosidadeTexto">
                        A palavra Kawaii surgiu em 1970 na cultura japonesa e pode ser considerada um neologismo. O kanji (可爱) utilizado para representar o termo é semelhante ao que usam na China. Kawaii é uma palavra japonesa com vários significados por não ter uma tradução exata. Ela pode ser usada para adjetivos como fofo, adorável, amável, doce, doçura e etc. A palavra é usada principalmente pelos otakus, os fãs de anime e cultura pop japonesa, como uma forma de elogio.
                    </p>
                </div>
                <hr>

                <div>
                    <p class="AtividadeTitulo"> Atividade 2 </p>
                    <p class="AtividadeTexto">
                        Faça uma busca de imagens no Google ou outro buscador de sua preferência utilizando o termo “kawaii” e perceba sua reação inicial.
                    </p>
                </div>
                <hr>
                <br><br>

                <div class="text-center">
                    <a href="Topico02.1.1.php" type="button" class="btn btn-outline-success btn-sm">Página anterior</a>
                    <a href="Topico02.1.3.php" type="button" class="btn btn-outline-success btn-sm">Próxima página</a>
                </div>


                <!-- SCRIPT LIGHTBOX -->
                <script>
                    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                        event.preventDefault();
                        $(this).ekkoLightbox();
                    });
                </script>

            </div> <!-- CLASS PAGE TITLE FIM -->
        </div> <!-- CONTEUDO FIM -->

        <!-- FOOTER -->
        <?php include('layout/footer.php') ?>

    </div> <!-- DIV MAIN FIM -->

    <!-- FOOTER JS -->
    <?php include('layout/js.php') ?>

</body>