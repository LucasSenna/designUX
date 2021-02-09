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

                <h2 class="font-bold">4. Disciplinas de UX</h2>
                <hr>

                <p class="Texto">Com um mercado multidisciplinar, vários profissionais, como sociólogos, antropólogos, dramaturgos, combinam habilidades para encontrar as melhores soluções de interação (Rabelo, 2009). O campo de UX é situado junto com outras disciplinas e construído pelas intersecções e metodologias de avaliação (Macedo, 2014). As principais áreas envolvidas por UX são: psicologia; sociologia; antropologia; sistemas de informação; ciências da computação; design gráfico; e ergonomia.</p>

                <p class="Texto">Você consegue imaginar o quão diferente é uma interface que é desenvolvida a partir de processos de UX com outra que não é? IHC é resultado da soma de esforços entre dois mundos: cientistas da computação, que desenvolvem sistemas, linguagens e arquiteturas, e psicólogos, envolvidos no projeto de interface, informam o cientista a respeito das capacidades humanas (Rabelo, 2009).</p>

                <p class="Texto">Dan Saffer, em seu livro “<em>Designing for Interaction</em>”, explica que o foco no tecido conectivo entre as disciplinas torna os produtos holísticos. Cada disciplina só pode ir até certo ponto com as restrições sob as quais trabalham. Desta forma, todas as disciplinas precisam trabalhar juntas para descobrir soluções para as falhas do produto. Ainda nesse livro, cita as disciplinas que estão relacionadas com UX. Baseado nesse conjunto, a Figura 17 apresenta um infográfico que é a tradução do infográfico desenvolvido pela Envis Pricisely. Se quiser ver o infográfico em detalhes acesse <a href="https://medium.com/@beatrizmm/disciplinas-de-ux-6df6dc51e00" target="_blank">https://medium.com /@beatrizmm/disciplinas-de-ux-6df6dc51e00</a>.</p>

                <div class="text-center">
                    <p class="TituloFigura"><strong>Figura 19:</strong> Disciplinas de UX</p>
                    <a href="imagens/Figura19.png" data-toggle="lightbox" data-footer="Disciplinas de UX">
                        <img class="img-fluid" src="imagens/Figura19.png" alt="Figura 19 - Disciplinas de UX">
                    </a>
                    <p class="fonte FonteFigura"> Envis Pricisely </p>
                </div>
                <hr>

                <br><br>

                <div class="text-center">
                    <a href="Topico03.php" type="button" class="btn btn-outline-success btn-sm">Página anterior</a>
                    <a href="Topico05.php" type="button" class="btn btn-outline-success btn-sm">Próxima página</a>
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