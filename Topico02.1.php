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

                <h2 class="font-bold"> 2.1. Áreas de estudo em IHC </h2>
                <hr>

                <p class="Texto">IHC é uma disciplina interessada no projeto, implementação e avaliação de sistemas computacionais interativos (Hewett et al., 1992).<strong> IHC nesse sentido fornece explicações e previsões para fenômenos de interação usuário-sistema e resultados práticos para design da interface de usuário</strong>. A Figura <strong>3</strong> apresenta essa definição, estabelecendo a conexão entre previsão e design e entre explicação e avaliação. Design e avaliação que são duas áreas de atuação em IHC e consequentemente em design UX.</p>

                <div class="text-center">
                    <p class="TituloFigura"><strong>Figura 3:</strong> Principais conceitos de IHC</p>
                    <a href="imagens/Figura03.png" data-toggle="lightbox" data-footer="Principais conceitos de IHC">
                        <img class="img-fluid wow fadeIn" src="imagens/Figura03.png" alt="Figura 3 - Principais conceitos de IHC">
                    </a>
                    <p class="fonte FonteFigura"> Barbosa e Silva, 2010 </p>
                </div>
                <hr>

                <p class="Texto"> De acordo com Hewett, em seu livro sobre currículo para IHC “ACM SIGCHI curricula for human-computer interaction” (Hewett et al., 1992), é possível entender IHC dentro de um contexto de 5 aspectos inter-relacionados: </p>

                <p class="Texto pl-5">
                    1. Natureza da interação; <br>
                    2. Contexto de uso; <br>
                    3. Características humanas; <br>
                    4. Sistemas computacionais; <br>
                    5. Processo de desenvolvimento; <br>
                </p>

                <p class="Texto"> Algumas das inter-relações entre esses tópicos estão representadas na <strong>Figura 4</strong> (Hewett et al., 1992). </p>

                <div class="text-center">
                    <p class="TituloFigura"><strong>Figura 4:</strong> Abordagens de desenvolvimento</p>
                    <a href="imagens/Figura04.png" data-toggle="lightbox" data-footer="Abordagens de desenvolvimento">
                        <img class="img-fluid wow fadeInUp" src="imagens/Figura04.png" alt="Figura 4 - Abordagens de desenvolvimento">
                    </a>
                    <p class="fonte FonteFigura"> Barbosa e Silva, 2010 </p>
                </div>
                <hr>


                <p class="Texto"> Na imagem vemos que os sistemas computacionais existem em um ambiente <strong>social, organizacional e de trabalho</strong> mais amplo. Dentro deste contexto existem <strong>aplicações</strong> para as quais desejamos empregar esses sistemas. Porém o processo de colocar os computadores para funcionar significa que os <strong>aspectos humanos</strong>, técnicos e de trabalho da situação do aplicativo devem ser ajustados uns aos outros por meio da aprendizagem humana, adaptabilidade do sistema ou outras estratégias. </p>

                <p class="Texto"> Além do uso e do contexto social dos computadores, do lado humano também devemos levar em consideração as características de <strong>processamento da informação</strong> humana, <strong>comunicação</strong> e características físicas dos usuários, que envolvem a <strong>ergonomia</strong>. </p>

                <p class="Texto">Do lado do computador, que hoje representa uma infinidade de dispositivos, como smartphones, relógios inteligentes (smartwatches), dispositivos de assistentes inteligentes e outros, temos uma variedade de tecnologias desenvolvidas para dar suporte à interação com humanos. Essas tecnologias estabelecem <strong>dispositivos de entrada e saída</strong> que conectam o humano e a máquina. Estes dispositivos, também conhecidos por periféricos, que podem ser teclados, câmeras e até batimentos cardíacos, são usados a partir de várias <strong>técnicas</strong> para organizar um diálogo. Essas técnicas, por sua vez, são usadas para implementar elementos de design maiores, como a metáfora da interface. Aprofundando-se nos substratos da máquina que dão suporte ao diálogo, o diálogo pode fazer uso extensivo de técnicas de computação gráfica. </p>

                <p class="Texto">Nas seções seguintes vamos expandir cada uma das cinco áreas de estudo para compreender melhor essas conexões e a importância da presença de IHC na construção de sistemas.</p>
                <br><br>

                <div class="text-center">
                    <a href="Topico02.php" type="button" class="btn btn-outline-success btn-sm">Página anterior</a>
                    <a href="Topico02.1.1.php" type="button" class="btn btn-outline-success btn-sm">Próxima página</a>
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