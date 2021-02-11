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



                <h2 class="font-bold">2.1.1. Natureza da interação</h2>
                <hr>

                <p class="Texto">A natureza da interação envolve investigar o que ocorre enquanto as pessoas utilizam sistema interativos em suas atividades (Hewett et al., 1992). Envolve também entender alguns paradigmas dessa comunicação, como avaliar os diversos pontos de vista, como do ponto de vista de trabalho, onde se vê o sistema como ferramenta, ou do ponto de vista de controle, quando é necessário supervisionar atividades de alguém.</p>

                <p class="Texto">É também parte da natureza da interação que se compreenda os objetivos de uso de um sistema, por exemplo, produtividade ou capacitação do usuário. É neste âmbito que deve se discutir qual a consequência da interação do uso de um sistema para as pessoas e para sociedade.</p>

                <p class="Texto"><strong>Você em algum momento já ouviu seu telefone tocar ou vibrar sem ele estar tocando de fato</strong>? Se sim, este fenômeno pode ser considerado como a “Síndrome do Toque Fantasma”. Ele pode estar relacionado à nomofobia.</p>
                <hr>

                <div>
                    <p class="CuriosidadeTitulo"> Curiosidade</p>
                    <p class="CuriosidadeTexto"> A <strong>nomofobia</strong> é a fobia causada pelo desconforto ou angústia resultante da incapacidade de acesso à comunicação através de aparelhos celulares ou computadores. Surge quando alguém se sente impossibilitado de se comunicar ou se vê incontactável estando em algum lugar sem um aparelho de celular ou dispositivo com internet. É um termo muito recente e tem origem nos diminutivos ingleses No-Mo, ou No-Mobile, que significa sem celular. Daí a expressão "nomofobia" ou fobia de ficar sem um aparelho de comunicação móvel.
                    </p>
                </div>
                <hr>

                <p class="Texto">Recentemente uma reportagem do jornal Diário do Nordeste apresentou uma matéria sobre o uso abusivo de celulares. No texto, a psicóloga Anna Lucia Spear King, doutora em saúde mental do Instituto Delete (UFRJ) , explica que a dependência por celulares, também chamada de nomofobia, tem vários níveis: vai da falta de educação digital, que inclui a dificuldade de equilíbrio sobre o tempo e locais de uso, até o nível patológico.</p>

                <p class="Texto">Pesquisadores do Instituto Delete identificaram transtornos relacionados ao uso abusivo de celulares, como “o medo de ficar sem o celular”. Entre os transtornos estudados, citam o “Efeito Google”, que é quando as pessoas começam a reter menos informações já que podem obter respostas rápidas no Google.</p>

                <p class="Texto">Outro transtorno relacionado que causa comportamentos não esperados do indivíduo em sociedade é a “Invisibilidade Social”. A invisibilidade social vem sendo bastante explorada em filmes e séries que trazem a tecnologia como tema principal. Dois filmes que trazem essa discussão de forma mais leve são: o filme “<strong>avião</strong>” , que explora de forma divertida a falta do celular em uma jovem que é influenciadora digital e é obrigada a ir à casa do avô, onde não pega rede de celular, após pôr em risco sua própria vida em função da vida digital; e o filme “<strong>Nada a esconder</strong>” , que coloca em discussão o impacto das informações pessoais que recebemos pelos celulares em um jogo entre amigos. Apesar de a discussão nestes filmes ocorrer de forma mais leve, o problema é sério e pode desenvolver transtornos mais graves. </p>

                <p class="Texto">Você já se deu conta destes efeitos e de como o design tem responsabilidade sobre isto? Em outro exemplo recente, o documentário <strong>“O Dilema das Redes” expõe uma opinião</strong> sobre a manipulação sofrida pelos usuários das redes sociais com o objetivo de propiciar ganhos financeiros às empresas, analisando o papel das redes sociais e os danos que elas causam à sociedade.</p>
                <hr>

                <div>
                    <p class="AtividadeTitulo"> <br>Atividade 01</p>
                    <p class="AtividadeTexto">Veja o documentário “O dilema das redes” e escreva um parágrafo fazendo um paralelo do conteúdo do documentário com design de sistemas.</p>
                </div>
                <hr>

                <p class="Texto">Outro ponto importante sobre a natureza da interação é como a comunicação é estabelecida com os usuários. A UNESCO apresentou em 2019 um documento intitulado como “I'd blush if I could" (WEST et al., 2019). O título da publicação toma emprestado o nome da resposta dada por Siri, a assistente de voz feminina usada nos iPhones, quando um usuário dizia a 'ela' um insulto de gênero, onde a resposta era “Eu ficaria envergonhada se pudesse”. De acordo com o manual, essa resposta apresenta submissão da assistente em face ao abuso. Apesar de já ter sido corrigida, esta situação fornece uma ilustração poderosa dos preconceitos de gênero codificados em produtos de tecnologia, difundidos no setor de tecnologia e aparentes na educação de habilidades digitais.</p>

                <div class="text-center">
                    <p class="TituloFigura"><strong>Figura 5:</strong> Documento da UNESCO sobre gêneros em sistemas computacionais</p>
                    <a href="imagens/Figura05.png" data-toggle="lightbox" data-footer="Documento da UNESCO sobre gêneros em sistemas computacionais">
                        <img class="img-fluid wow fadeInUp" src="imagens/Figura05.png" alt="Figura 05 - Documento da UNESCO sobre gêneros em sistemas computacionais">
                    </a>
                    <p class="FonteFigura">Fonte: UNESCO</p>
                </div>
                <hr>

                <p class="Texto">Na área da comunicação com sistemas, o “Manual para uso não sexista da linguagem” do Governo do Rio Grande do Sul levanta questões sobre o uso da linguagem e expõe soluções práticas e aplicadas a textos para uma comunicação mais apropriada. Estes conceitos surgem em áreas distintas e devem ser incorporados ao design de sistemas. O efeito dessa evolução pode ser visto como o que a plataforma GitHub realizou ao substituir termos considerados racistas , como 'master' (mestre) e 'slave' (escravo) por alternativas como 'principal', 'padrão', 'primário' e 'secundário'.</p>

                <p class="Texto">Há muita responsabilidade no design de sistemas, mas também é fato que essa responsabilidade se altera com o tempo. Cada geração resolve novos problemas e se depara com outros. A exemplo disso, vejam na <strong>Figura 6</strong> a evolução da embalagem de um chocolate voltado para crianças que teve em sua primeira versão em 1959 uma imitação aos cigarros, que eram comuns na época e representavam status e elegância.</p>

                <div class="text-center">
                    <p class="TituloFigura"><strong>Figura 6:</strong> Evolução das embalagens do produto Reprodução </p>
                    <a href="imagens/Figura06.png" data-toggle="lightbox" data-footer="Evolução das embalagens do produto Reprodução ">
                        <img class="img-fluid wow fadeInUp" src="imagens/Figura06.png" alt="Figura 06 - Evolução das embalagens do produto Reprodução ">
                    </a>
                    <p class="FonteFigura">Fonte: Veja SP, 2017</p>
                </div>
                <hr>

                <p class="Texto">Olhando para o futuro, nos deparamos com a responsabilidade de planejar sistemas com tecnologias como inteligência artificial. De acordo com o artigo científico de Bostrom e Yudkowsky (2014), a possibilidade de criar máquinas pensantes levanta uma série de questões éticas. Essas questões se referem tanto a garantir que tais máquinas não prejudiquem os humanos e outros seres moralmente relevantes, quanto ao status moral das próprias máquinas. Para estas tecnologias mais avançadas e complexas, se espera critérios de aceitação como responsabilidade, transparência e auditabilidade.</p>

                <div>
                    <p class="FiqueAtentoTitulo"> Fique Atento</p>
                    <p class="FiqueAtentoTexto"> Todo produto é de responsabilidade de quem o planeja (designer), de quem o constrói e de quem o utiliza.</p>
                </div>
                <hr>
                <br><br>

                <div class="text-center">
                    <a href="Topico02.1.php" type="button" class="btn btn-outline-success btn-sm">Página anterior</a>
                    <a href="Topico02.1.2.php" type="button" class="btn btn-outline-success btn-sm">Próxima página</a>
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