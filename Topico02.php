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

                <h2 class="font-bold">2. Interação Humano-Computador</h2>
                <hr>

                <p class="Texto">O exemplo que foi apresentado na seção de Apresentação explora conceitos de IHC aplicados a produtos físicos. IHC, entretanto, tem foco em sistemas computacionais. Desta forma seguiremos a partir daqui com exemplos de sistemas que podem ser aplicativos de celulares, como Whatsapp, softwares que você utiliza no computador, como Microsoft Word, sistemas embarcados em outros dispositivos, como sistemas que estão presentes nos caixas eletrônicos do seu banco, dentre outros. Isto não impede, porém, que os conceitos sejam utilizados de forma ampla em outros aspectos da vida. </p>

                <p class="Texto"><strong>Interação Humano-Computador (IHC)</strong> é uma subárea da computação que está interessada na qualidade de uso de sistemas e no impacto destes sistemas na vida de seus usuários (Barbosa e Silva, 2010). IHC tem um foco diferente de Engenharia de Software, que busca proporcionar sistemas interativos mais eficientes, robustos, livres de erros e de fácil manutenção. Essas características de Engenharia de Software não garantem qualidade de uso, logo é possível ter um sistema robusto e livre de erros, que seja difícil de ser compreendido pelo usuário e pouco útil para ele. </p>

                <p class="Texto">Diante desse cenário, há duas possibilidades para construção de um software: (a) de dentro para fora e (b) de fora para dentro.</p>

                <div class="text-center">
                    <p class="TituloFigura"><strong>Figura 2:</strong> Abordagens de desenvolvimento</p>
                    <a href="imagens/Figura02.png" data-toggle="lightbox" data-footer="Abordagens de desenvolvimento">
                        <img class="img-fluid" src="imagens/Figura02.png" alt="Figura 2 - RAbordagens de desenvolvimento">
                    </a>
                    <p class="FonteFigura">Barbosa e Silva, 2010.</p>
                </div>
                <hr>

                <p class="Texto">Qual destas abordagem você considera a mais correta? A resposta é que não há uma abordagem correta e sim especificidades de construção do software que necessitam de uma ou outra abordagem. </p>

                <div>
                    <p class="ImportanteTitulo"> FIQUE ATENTO </p>
                    <p class="FiqueAtentoTexto"> Cada projeto possui uma realidade própria, que inclui tecnologias escolhidas, limitações de recursos, processo de desenvolvimento etc, assim como há um propósito para o qual o projeto existe. É necessário analisar esta realidade para definir características de projeto, como, por exemplo, a abordagem de desenvolvimento. Este é um dos papéis dos analistas de sistemas. </p>
                </div>
                <hr>

                <p class="Texto">A concepção de <strong>dentro para fora</strong> tem ênfase na representação de dados e algoritmos que processam estes dados, assim como na arquitetura do sistema. Não é dada atenção a como esse software será utilizado e normalmente se pressupõe que haverá um esforço de quem o utiliza para que compreendê-lo bem. Por exemplo, sistemas que interagem somente com outros sistemas podem utilizar-se bem dessa abordagem para ter qualidade de construção como prioritária e se ajustar corretamente às limitações dos projetos.</p>

                <p class="Texto">Esta abordagem é concebida em grande parte da Computação (Barbosa e Silva, 2010) e como resultado é comum que sistemas que possuem uma grande abrangência de usuários tenham interfaces não apropriadas.</p>

                <p class="Texto">Para uma interface mais alinhada com o uso real do sistema, podemos utilizar a abordagem de <strong>fora para dentro</strong>, que começa investigando os atores envolvidos, seus interesses, objetivos, atividades, responsabilidades, motivações, os artefatos utilizados, o domínio, o contexto de uso, dentre outros (Barbosa e Silva, 2010), para somente depois identificar oportunidades de intervenção na interação atual e como essa estrutura será viabilizada pelas tecnologias utilizadas. </p>
                <br><br>

                <div class="text-center">
                    <a href="Topico01.php" type="button" class="btn btn-outline-success btn-sm">Página anterior</a>
                    <a href="Topico02.1.php" type="button" class="btn btn-outline-success btn-sm">Próxima página</a>
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