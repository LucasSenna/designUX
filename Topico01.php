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

                <h2 class="font-bold">1. Apresentação</h2>
                <hr>

                <p class="Texto">Antes de entender o que é de fato design UX, ou design de experiência do usuário, precisamos entender conceitos fundamentais da área. O que vamos aprender neste curso são os conceitos básicos, a história e quem é o usuário. Ao longo deste material vamos chamar de design UX, como é comumente chamado no mundo da tecnologia da informação. UX é um acrônimo do termo inglês User eXperience, que em português é <strong>experiência do usuário</strong>.</p>

                <div>
                    <p class="ImportanteTitulo"> Importante</p>
                    <p class="ImportanteTexto">Este é um curso introdutório, onde vamos passar por conteúdos que podem ser apresentados de forma extensa, mas não é este o nosso objetivo aqui. Então vamos conhecer o que é fundamental para você entender <em>design UX</em> na área de tecnologia ou em outros âmbitos da vida.</p>
                </div>
                <hr>

                <p class="Texto">Quando você compra algum dispositivo, objeto ou mesmo um aplicativo de celular, alguém pensou e planejou como esse objeto ou aplicativo iria se comunicar com você, isto é, de que forma você iria interagir com ele. Vamos a um exemplo prático!</p>

                <p class="Texto">Na <strong>Figura 1</strong> você está vendo um rádio bluetooth que foi comprado em uma loja de eletrônicos no Beco da Poeira, no Centro de Fortaleza. Com uma marca desconhecida que o identifica como N80, o dispositivo tinha um “ar” vintage, que trazia características belas e antigas, como o acabamento externo que lembrava madeira, e funcionalidades modernas, como tocar áudio se conectado ao celular. Com um valor bem mais acessível que as marcas famosas, o objeto ganhou apreço e um espaço na minha sala de estar. Apesar de não conhecer a marca ou o dispositivo, o vendedor falou de funcionalidades e características que eu já conhecia:</p>

                <p class="Texto pl-5">
                    1. Tem caixas de som;<br>
                    2. Toca som via bluetooth ou pen drive (dispositivo de armazenamento USB);<br>
                    3. Toca rádio AM e FM.
                </p>

                <p class="Texto">Em casa, após retirá-lo da caixa, analisei o objeto que acabei de comprar e olhei tudo aquilo que parecia ser clicável ou que se movimentava: botões, antena etc. É comum analisarmos objetos novos. Algo que chamou bastante atenção foi um item brilhoso logo na parte da frente dele...</p>

                <p class="Texto">Para você fazer parte dessa experiência de primeiro uso, gostaria que analisasse o N80, Figura 1, informando o que este item metálico faz? Qual a sua principal funcionalidade? Escolha uma das opções abaixo:</p>

                <p class="Texto pl-5">
                    a) sintoniza as rádios <br>
                    b) passa e retorna as músicas<br>
                    c) aumenta e reduz o volume<br>
                    d) é um item de enfeite<br>
                </p>

                <div class="text-center">
                    <p class="TituloFigura"><strong>Figura 1:</strong> Radio Bluetooth N80</p>
                    <a href="imagens/Figura01.png" data-toggle="lightbox" data-footer="Radio Bluetooth N80">
                        <img class="img-fluid wow fadeIn" src="imagens/Figura01.png" data-wow-delay="0.6s" alt="Figura 1 - Radio Bluetooth N80">
                    </a>
                    <p class="FonteFigura">Fonte: autor.</p>
                </div>
                <hr>

    
                <p class="Texto">A resposta correta é o item d, mas provavelmente você escolheu um dos itens a, b ou c. Por que isso acontece?</p>

                <p class="Texto">Isso acontece porque guardamos lembranças dos dispositivos que já utilizamos. Este componente visual e físico lembra botões que aumentam volume ou têm outras ações conhecidas de outros rádios que já utilizamos. Tornar um item que se assemelha a um botão como item decorativo é algo que pode confundir quem o utiliza. O design de um produto ou de um processo deve ser algo bem estruturado e pautado em quem o utiliza, que chamaremos de <strong>usuário</strong>.</p>

                <p class="Texto">Neste exemplo podemos fazer perguntas importantes que devem ser respondidas pelo processo de design e que são a base do conceito de design UX:</p>

                <p class="Texto pl-5">
                    <strong>
                        1. É fácil de aprender?<br>
                        2. É fácil de recordar?<br>
                        3. Você se sente satisfeito?<br>
                    </strong>
                </p>

                <p class="Texto">Estas perguntas podem ser direcionadas somente ao “botão”, um item da interface, mas também podem ser aplicadas de forma global ao produto. Em alguns aspectos do design UX, é possível mensurar até a experiência completa que se inicia na compra ou no ato de desembalar o produto da caixa após comprar. Vamos à teoria?</p>
                <br><br>

                <div class="text-center">
                    <a href="Topico02.php" type="button" class="btn btn-outline-success btn-sm">Próxima página</a>
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

</html>