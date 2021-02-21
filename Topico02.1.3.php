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
                <h2 class="font-bold">2.1.3. Características humanas:</h2>
                <hr>

                <p class="Texto">As características humanas envolvem investigar a forma como as pessoas se comunicam e interagem entre si e com outros artefatos utilizando visão, audição, processos cognitivos e outros fenômenos humanos para compreensão. A interação com qualquer artefato novo, principalmente os sistemas computacionais interativos, que lidam com informações, requer capacidade cognitiva para processar informações e aprender a utilizá-los (Barbosa e Silva, 2010).</p>

                <p class="Texto">Voltando ao exemplo inicial deste curso, do rádio bluetooth, podemos relembrar que houve uma expectativa de funcionalidade para o elemento da interface que parecia um botão comum em outros dispositivos semelhantes. Isto é explicado pela nossa <strong>tendência a repetir interações cotidianas</strong>.</p>

                <p class="Texto">É possível aproveitar estas capacidades do usuário respeitando suas limitações. Por exemplo, algumas interfaces de sistemas que tocam músicas apresentam elementos semelhantes aos botões de volume de dispositivos físicos. Este estilo de design é chamado de skeumorfismo.</p>

                <p class="TituloFigura text-center pr-5">
                    Contexto de uso x Contexto de Desenvolvimento.
                </p>

                <div class="row">
                    <div class="col">
                        <div class="text-center">
                            <p class="TituloFigura"><strong>Figura 9.1:</strong> Contexto de uso </p>
                            <a href="imagens/Figura09.1.png" data-toggle="lightbox" data-footer="Contexto de uso ">
                                <img class="img-fluid wow fadeInLeft" src="imagens/Figura09.1.png" alt="Figura 07 - Contexto de uso ">
                            </a>
                            <p class="FonteFigura">Fonte: Google</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="text-center">
                            <p class="TituloFigura"><strong>Figura 9.2:</strong> Contexto de desenvolvimento </p>
                            <a href="imagens/Figura09.2.png" data-toggle="lightbox" data-footer="Contexto de desenvolvimento ">
                                <img class="img-fluid wow fadeInRight" src="imagens/Figura09.2.png" alt="Figura 07 - Contexto de desenvolvimento ">
                            </a>
                            <p class="FonteFigura">Fonte: Google</p>
                        </div>
                    </div>
                </div>
                <hr>

                <div>
                    <p class="SaibaMaisTitulo"> Saiba Mais</p>
                    <p class="SaibaMaisTexto"><strong>Skeumorfismo</strong>, do grego, <em>skeuos</em>, recipiente ou ferramenta; e <em>morphe</em>, forma. O termo se refere a truques visuais ou ao uso de talhes e ornamentações para imitar outros materiais e formas físicas. A estratégia existe pelo menos desde a GUI (Interface Gráfica do Usuário) dos computadores da Apple, de 1984, que introduziu o conceito de área de trabalho com ícones semelhantes à pastas e pedaços de papel. O recurso se mostrou extremamente útil naquela época, pois tais interfaces gráficas constituíam conceitos estranhos para a maioria dos usuários, de modo que o uso desses itens familiares representava um auxílio significativo para a compreensão do seu funcionamento e operação (De Sousa e Grimaldi, 2015). </p>
                </div>
                <hr>

                <p class="Texto">Para compreender as características humanas envolvidas, é necessário separar os elementos principais da interação: o <strong>sistema</strong>, a <strong>interface</strong> e o <strong>usuário</strong> (Figura 10). A interface compreende toda a opção do sistema com a qual o usuário mantém contato físico (motor ou perceptivo) ou conceitual durante a interação (Moran, 1996). A interface é muitas vezes confundida com o próprio sistema, mas o sistema pode envolver outras partes de uma arquitetura que é invisível ou inacessível ao usuário. Entre o usuário e o sistema nós temos os processos de ação e de interpretação através da interface.</p>

                <div class="text-center">
                    <p class="TituloFigura"><strong>Figura 10:</strong> Sistema - Interface - Usuário</p>
                    <a href="imagens/Figura10.png" data-toggle="lightbox" data-footer="Sistema - Interface - Usuário">
                        <img class="img-fluid wow fadeIn" src="imagens/Figura10.png" alt="Figura 10 - Sistema - Interface - Usuário">
                    </a>
                    <p class="FonteFigura">Fonte: Blog Thiago Esser</p>
                </div>
                <hr>

                <div>
                    <p class="CuriosidadeTitulo"> Curiosidade</p>
                    <p class="CuriosidadeTexto">
                        Se você quer expandir um pouco mais os conceitos de usuário e interface, aponte a câmera do seu celular para o QRCode e veja o vídeo de um comercial de um Pet-commerce. Se não conseguir acessar com o código, <a href="https://www.youtube.com/watch?v=dEAQkHj25hg&feature=youtu.be" target="_blank">CLIQUE AQUI</a>.
                    </p>
                    <div class="text-center">
                        <img src="imagens/QrCode.png" class="rounded" alt="QrCode">
                    </div>
                </div>
                <hr>

                <p class="Texto">Imagine agora que você nunca viu um iPad, mas acabei de lhe entregar um e dizer que você pode ler livros nele. Antes de ligar o iPad, antes de usá-lo, você tem um modelo em sua cabeça de como será a leitura de um livro no iPad. Você tem suposições sobre como o livro será apresentado na tela, como será possível interagir, como passar uma página. Você tem um “<strong>modelo mental</strong>” de leitura de um livro no iPad, mesmo que nunca o tenha feito antes (Figura 11).</p>

                <div class="text-center">
                    <p class="TituloFigura"><strong>Figura 11:</strong> Modelo mental de leitura no iPad</p>
                    <a href="imagens/Figura11.png" data-toggle="lightbox" data-footer="Modelo mental de leitura no iPad">
                        <img class="img-fluid wow fadeInUp" src="imagens/Figura11.png" alt="Figura 11 - Modelo mental de leitura no iPad">
                    </a>
                    <p class="FonteFigura">Fonte: UXMag</p>
                </div>
                <hr>

                <p class="Texto">A aparência e o comportamento desse modelo mental na sua cabeça depende de muitas coisas: se você já usou um iPad antes, seu modelo mental de ler um livro em um iPad será diferente do de alguém que nunca usou um. Assim que você utilizar o iPad para ler algum livro, qualquer modelo mental que você tinha em sua cabeça antes começará a mudar e se ajustar para refletir sua experiência (Weinschenk, 2010). </p>

                <div>
                    <p class="SaibaMaisTitulo"> Saiba Mais</p>
                    <p class="SaibaMaisTexto">
                        <strong>Modelo mental</strong> é a representação do processo de <strong>pensamento de alguém para saber como algo funciona</strong> (ou seja, a compreensão da pessoa sobre o mundo que a envolve). Os modelos mentais são <strong>baseados em informações incompletas, experiências passadas e até mesmo percepções intuitivas</strong>. Eles ajudam a moldar ações e comportamentos, influenciando naquilo que as pessoas devem prestar atenção em situações complicadas e como elas abordam e resolvem os problemas (CAREY, 1986).
                    </p>
                </div>
                <hr>

                <p class="Texto">Para entender por que os modelos mentais são tão importantes para projetar interfaces de usuário, você também precisa entender o que é um modelo conceitual. Um <strong>modelo conceitual</strong> é o modelo real que é fornecido ao usuário por meio da interface do produto (Weinschenk, 2010). No exemplo da leitura do livro no iPad, você tem um modelo mental sobre como será a leitura de um livro no dispositivo, como funcionará e o que você pode fazer com o dispositivo pela interface. Mas quando você senta com o iPad, o “sistema” (o iPad) exibe o que o modelo conceitual do aplicativo de livro realmente é. O <strong>modelo conceitual é formado por telas, botões e ações que acontecem independente do que você esperava</strong> (Weinschenk, 2010). A interface real representa o modelo conceitual. Alguém projetou uma interface. </p>

                <p class="Texto">Encerramos esta sessão de características humanas com dois conceitos importantes para design UX: modelos conceituais e modelos mentais. O designer, ou quem tenha esse papel na equipe, é um elo entre os dois modelos. Com técnicas apropriadas e uma visão ampla dos projetos, ele é capaz de reduzir a distância entre o que se espera (modelo mental) do que se projeta e constrói (modelo conceitual).</p>
                <hr>

                <div>

                    <p class="AtividadeTitulo"> Atividade 3</p>
                    <p class="AtividadeTexto">
                        Aponte a câmera do seu celular para o QRCode e veja o vídeo “Uninvited Guests”, “Convidados não convidados” em português. Se não conseguir acessar com o código, <a href="https://vimeo.com/128873380" target="_blank">CLIQUE AQUI</a>. Agora responda com base nos conceitos apresentados:
                        <br>
                    <div class=" AtividadeTexto pl-5">
                        1. Descreva a interface desse sistema.<br>
                        2. Como você imagina que os modelos conceituais e mentais se integram nesse sistema?<br>
                        3. Que problemas você vê nas diferenças entre o modelo conceitual e mental desse sistema?<br>
                    </div>
                    </p>
                    <div class="text-center">
                        <img src="imagens/QrCode2.png" class="rounded" alt="QrCode2">
                    </div>
                </div>
            </div>
            <p class="Texto">
                <small><i class="fa fa-info-circle fa-lg Azul" aria-hidden="true"></i> Essa atividade é apenas para fins de exercitar o conteúdo já visto, não será avaliada pela equipe no final do curso, portanto, não precisa ser enviada para correção.</small>
                <hr>

                <br><br>

            <div class="text-center">
                <a href="Topico02.1.2.php" type="button" class="btn btn-outline-success btn-sm">Página anterior</a>
                <a href="Topico02.1.4.php" type="button" class="btn btn-outline-success btn-sm">Próxima página</a>
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