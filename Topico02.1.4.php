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
                <h2 class="font-bold">2.1.4. Sistemas computacionais</h2>
                <hr>

                <p class="Texto">
                    Sistemas de computadores envolvem utilizar arquiteturas, técnicas e interfaces buscando construir sistemas que favoreçam a experiência de uso. É possível aproveitar modelos conceituais para entregar sistemas mais adequados aos usuários. Diversas tecnologias e dispositivos têm sido desenvolvidos para permitir e facilitar a interação com pessoas (Barbosa e Silva, 2010).
                </p>

                <p class="Texto">O uso de técnicas de Computação Gráfica e Inteligência Artificial podem beneficiar a interação com um sistema a partir do poder das tecnologias. Mas o que poderia de fato ser esse benefício? Em que áreas podemos melhorar com tecnologias mais avançadas?</p>

                <p class="Texto">O LEAD , Centro de Pesquisa, Desenvolvimento e Inovação Dell, por exemplo, é um local que explora conhecimento avançado em tecnologia para resolver problemas de acessibilidade. Um dos projetos de pesquisa que desenvolvem é o ARTRADE (Figura 12). O ARTRADE é uma aplicação mobile, para smartphones, que auxilia na montagem de hardware, ensinando os funcionários da fábrica da Dell a como montar peças completas de dispositivos da marca. Este projeto utiliza um óculos de realidade aumentada e é acessível para pessoas com deficiência auditiva.
                </p>

                <div class="text-center">
                    <p class="TituloFigura"><strong>Figura 12:</strong> ARTRADE</p>
                    <a href="imagens/Figura12.png" data-toggle="lightbox" data-footer="ARTRADE">
                        <img class="img-fluid" src="imagens/Figura12.png" alt="Figura 12 - ARTRADE">
                    </a>
                    <p class="FonteFigura">Fonte: LEAD</p>
                </div>
                <hr>

                <br><br>

                <div class="text-center">
                    <a href="Topico02.1.3.php" type="button" class="btn btn-outline-success btn-sm">Página anterior</a>
                    <a href="Topico02.1.5.php" type="button" class="btn btn-outline-success btn-sm">Próxima página</a>
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