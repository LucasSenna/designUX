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
                <h2 class="font-bold">2.1.5. Processo de desenvolvimento</h2>
                <hr>

                <p class="Texto">O processo de desenvolvimento influencia na qualidade do produto final. É no processo de desenvolvimento que é possível aplicar abordagens de IHC, que podem ser métodos, técnicas e ferramentas de construção de interface e de avaliação. O processo de desenvolvimento pode incluir, por exemplo, uma análise de casos de sucesso e de insucesso de interfaces.</p>

                <p class="Texto">A prototipação é uma prática comum no processo de desenvolvimento. O <strong>protótipo</strong> é uma representação do sistema ou produto real de forma que seja possível imaginá-lo sem a necessidade de ser desenvolvido. É uma técnica utilizada para discutir, testar e documentar uma solução. É possível trabalhar com prototipação em vários níveis de fidelidade. A Figura 13 apresenta protótipos que vão de um nível de fidelidade mais baixos, também conhecidos por wireframes, até níveis de fidelidade com a realidade mais altos, que podem ser feitos em softwares especializados, como Adobe XD, Figma, dentre outros.</p>

                <div class="text-center">
                    <p class="TituloFigura"><strong>Figura 13:</strong> Prototipação</p>
                    <a href="imagens/Figura13.png" data-toggle="lightbox" data-footer="Prototipação">
                        <img class="img-fluid wow fadeInDown" src="imagens/Figura13.png" alt="Figura 13 - Prototipação">
                    </a>
                    <p class="FonteFigura">Fonte: Ironhack ux design</p>
                </div>
                <hr>

                <p class="Texto"> No processo de desenvolvimento devemos estabelecer qual nível de qualidade que se espera de um sistema ou produto. De acordo com Barbosa e Silva (2010), os critérios de qualidade de uso enfatizam certas características da interação e da interface que as tornam adequadas aos efeitos esperados do uso do sistema. Os critérios de qualidade de uso são:</p>

                <p class="Texto pl-5">
                    1. <strong>Usabilidade</strong>: facilidade de aprendizado da interface e satisfação do usuário;<br>
                    2. <strong>Experiência do usuário</strong>: emoções e sentimentos do usuário;<br>
                    3. <strong>Acessibilidade</strong>: remoção das barreiras que impedem os usuários de interagir com a interface;<br>
                    4. <strong>Comunicabilidade</strong>: comunicar ao usuário as intenções de design e a lógica que rege o comportamento da interface.
                </p>

                <p class="Texto">A parte do processo de desenvolvimento que engloba as práticas e conceitos de qualidade em IHC é chamada de “Processo de Design”. Existem diversas metodologias para processos de design, como Design de Interação (Roger e Preece, 2013), Design Sprint , Lean UX (Gothelf, 2013), dentre outros.</p>

                <br><br>

                <div class="text-center">
                    <a href="Topico02.1.4.php" type="button" class="btn btn-outline-success btn-sm">Página anterior</a>
                    <a href="Topico03.php" type="button" class="btn btn-outline-success btn-sm">Próxima página</a>
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