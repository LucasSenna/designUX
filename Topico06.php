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

                <h2 class="font-bold">6. Benefícios de UX</h2>
                <hr>

                <p class="Texto">Para finalizarmos o curso, vamos apresentar que benefícios a aplicação de um processo de UX pode trazer a um projeto. Um olhar crítico na experiência do usuário pode aumentar a qualidade de uso, reduzir o número e a gravidade dos erros cometidos pelos usuários, reduzir o custo de treinamento, reduzir o custo de suporte técnico e aumentar as vendas e a fidelidade do cliente. </p>

                <p class="Texto">Os benefícios de práticas da IHC, como metodologias e pesquisas, não se restringem ao uso de sistemas, podem ter impacto também na aceitabilidade e permanência de um produto no mercado (Rabelo, 2009).</p>

                <p class="Texto">Como já foi bastante apresentado, a experiência do usuário é uma disciplina multidisciplinar que surgiu a partir da junção de muitas áreas de estudo. Hoje o foco do design UX aplicado está em interfaces computacionais, mas em breve acompanhará a evolução das interfaces que irão existir em muitos objetos ao nosso redor e não somente em telas. Por isso, a área de UX continua muito próxima da ciência, pois necessita buscar novas respostas para acompanhar a evolução das interfaces.</p>

                <p class="Texto">Assim como as interfaces mudam, os usuários também. Chamá-lo de usuário não deve torná-lo menos humano. Usuários são pessoas e estamos constantemente mudando individualmente e como sociedade. Os acontecimentos históricos, como uma pandemia, podem alterar o curso de como interagimos com os sistemas computacionais. O design UX deve acompanhar e entender essas mudanças, sempre respeitando a realidade do local em que é aplicada. </p>

                <br><br>

                <div class="text-center">
                    <a href="Topico05.php" type="button" class="btn btn-outline-success btn-sm">Página anterior</a>
                    <a href="Referencias.php" type="button" class="btn btn-outline-success btn-sm">Próxima página</a>
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