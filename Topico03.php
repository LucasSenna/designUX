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

                <h2 class="font-bold">3. História de UX</h2>
                <hr>

                <p class="Texto">Experiência de usuário é uma área multidisciplinar de estudo, que ao longo do tempo evoluiu a partir de disciplinas diferentes. Experiência de usuário é o estudo do uso que as pessoas fazem de artefatos por meio de atividades guiadas e essa base vem das ciências de comportamento, especificamente ergonomia, psicologia e ‘human factors’ (Macedo, 2014).</p>

                <p class="Texto">A evolução do termo ao que conhecemos hoje é resultado de mais de 30 anos em pesquisas científicas aplicadas no mercado. Contar essa história será sempre de uma forma breve, já que não é possível contar a história de todas as disciplinas que esse tema abrange. Vamos agora voltar no tempo para conhecer onde essas disciplinas se encontram para resolver problemas no uso de sistemas.</p>

                <div>
                    <p class="SubTitulo">1857 - Ergonomia</p>
                    <p class="Texto">A revolução industrial proveu meios para a estruturação dos estudos sobre como criar ferramentas com as quais os trabalhadores das fábricas pudessem realizar suas atividades de forma mais eficiente. O desenvolvimento dessas metodologias resultou na Ergonomia, termo cunhado por Wojciech Jastrzębowski em 1857 (Macedo, 2014). </p>
                </div>

                <div>
                    <p class="SaibaMaisTitulo"> Saiba Mais</p>
                    <p class="SaibaMaisTexto">O termo <strong>ergonomia</strong> deriva das palavras gregas ergon ("trabalho") e nomos ("lei natural"). </p>
                </div>
                <hr>

                <div>
                    <p class="SubTitulo">1885 - Pós-Revolução Industrial</p>
                    <p class="Texto">Após o período da Revolução Industrial, o legado dos novos ambientes de trabalho manteve a necessidade de compreender como funcionários poderiam interagir com máquinas ou processos para entregar resultados de forma mais eficiente. A produtividade era o centro da produção Fordista e Taylorista, comumente aplicados na época.</p>
                </div>

                <div>
                    <p class="SaibaMaisTitulo"> Saiba Mais</p>
                    <p class="SaibaMaisTexto">O <strong>Taylorismo</strong> e o <strong>Fordismo</strong> enfatizaram os princípios de fabricação. O Taylorismo iniciou a partir do estudo da mão de obra na produção industrial, organizando o trabalho de modo a obter grande produtividade com menor custo. O Fordismo manteve o mecanismo de produção e organização semelhante ao taylorismo, porém adicionou a esteira rolante, ditando um novo ritmo de trabalho. O filme “Tempos Modernos” de Charlie Chaplin representa bem esse estilo, como pode ser visto na Figura 14. </p>
                </div>

                <div class="text-center">
                    <p class="TituloFigura"><strong>Figura 14:</strong> Uma esteira rolante industrial no filme “Tempos Modernos”</p>
                    <a href="imagens/Figura14.gif" data-toggle="lightbox" data-footer="Uma esteira rolante industrial no filme “Tempos Modernos”">
                        <img class="img-fluid" src="imagens/Figura14.gif" alt="Figura 14 - Uma esteira rolante industrial no filme “Tempos Modernos”">
                    </a>
                    <p class="fonte FonteFigura"> Google </p>
                </div>
                <hr>

                <p class="Texto">Dentro desse contexto um casal de estudiosos se destacou: <strong>Lillian Gilbreth e Frank Gilbreth</strong> (Figura 15). Ambos engenheiros e ela doutora em psicologia, uniram as duas áreas de atuação para entender sobre otimização de tempo e produtividade, aplicando resultados de um profundo estudo psicológico nos hábitos e produções industriais. Lillian Gilbreth ainda avançou em áreas como ergonomia de materiais, ferramentas e equipamentos voltados para atividades diári as. </p>

                <p class="Texto">O casal Gilbreth é mais conhecido no âmbito da Administração, mas como mencionado anteriormente, a experiência de usuário é multidisciplinar e a bem conhecida <strong>análise de tempos e movimentos</strong> do casal influenciou no que aplicamos e entendemos hoje como UX. Afinal, nós continuamos em busca da otimização do tempo e de processos para simplificar tarefas e em busca de melhor produtividade. </p>

                <p class="TituloFigura text-center pr-5">
                    Casal Gilbreth e o livro sobre análise de tempos e movimentos.
                </p>
                -
                <div class="row">
                    <div class="col">
                        <div class="text-center">
                            <p class="TituloFigura"><strong>Figura 15:</strong> Casal GilbrethContexto de uso </p>
                            <a href="imagens/Figura15.png" data-toggle="lightbox" data-footer="Casal Gilbreth">
                                <img class="img-fluid" src="imagens/Figura15.png" alt="Figura 15 - Casal Gilbreth ">
                            </a>
                            <p class="FonteFigura">Fonte: Portal Gestão</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="text-center">
                            <p class="TituloFigura"><strong>Figura 15.1:</strong> Livro sobre análise de tempos e movimentos. </p>
                            <a href="imagens/Figura15.1.png" data-toggle="lightbox" data-footer="Livro sobre análise de tempos e movimentos.">
                                <img class="img-fluid" src="imagens/Figura15.1.png" alt="Figura 15 - Livro sobre análise de tempos e movimentos.">
                            </a>
                            <p class="FonteFigura">Fonte: Blog Marília UNESP
                            </p>
                        </div>
                    </div>
                </div>
                <hr>

                <div>
                    <p class="SaibaMaisTitulo"> Saiba Mais</p>
                    <p class="SaibaMaisTexto">Lillian Gilbreth foi fundamental no desenvolvimento da cozinha moderna. A ela é creditada a invenção de latas de lixo com pedal e as prateleiras internas dos refrigeradores. Quando trabalhava na General Electric, ela entrevistou mais de quatro mil mulheres para desenvolver fogões, pias e outros equipamentos de cozinha com a altura e peso adequados . </p>
                </div>
                <hr>

                <div>
                    <p class="SubTitulo">1879 - Psicologia aplicada</p>
                    <p class="Texto">Em outros lugares do mundo, cientistas estudavam os modelos de pensamento, sobre como realizamos as tarefas de maneira cognitiva, e o que nos motiva. Em 1879, Wilhelm Wundt fundou o primeiro laboratório de psicologia aplicada, como sensações táteis, percepções espaciais, processos atencionais, sentimentos e afetos, processos de associação e memória, etc (Araujo, 2009). A criação desse laboratório teve impacto em como as pesquisas eram realizadas e conduzidas. O protocolo de avaliação de UX hoje evoluiu a partir desse formato.</p>
                </div>

                <div class="text-center">
                    <p class="TituloFigura"><strong>Figura 16:</strong> Wilhelm Wundt e sua equipe no laboratório de psicologia aplicada na Universidade de Leipzig, Alemanha</p>
                    <a href="imagens/Figura16.png" data-toggle="lightbox" data-footer="Wilhelm Wundt e sua equipe no laboratório de psicologia aplicada na Universidade de Leipzig, Alemanha">
                        <img class="img-fluid" src="imagens/Figura16.png" alt="Figura 16 - Wilhelm Wundt e sua equipe no laboratório de psicologia aplicada na Universidade de Leipzig, Alemanha”">
                    </a>
                    <p class="fonte FonteFigura"> Psicoativo </p>
                </div>
                <hr>

                <div>
                    <p class="SubTitulo">1960 - Interface e indústria da computação</p>
                    <p class="Texto">O termo ‘interface’ foi inventado por volta de 1880, mas a palavra não teve muita repercussão até 1960 quando começou a ser utilizada pela indústria computacional (Rebelo, 2009). Enquanto <strong>interação</strong> tem um enfoque mais amplo com novos campos de estudo envolvendo a comunicação entre usuários e computadores ou outros tipos de produtos, o termo <strong>interface</strong> estabelece o conceito de ponto de interação entre um computador e outra entidade (Rebelo, 2009).</p>
                    <p class="Texto">Ainda na década de 60, Richard Saul Wurman foi uma das primeiras pessoas a usar o termo “<strong>Arquitetura da Informação</strong>”, que hoje integra um dos principais fundamentos de UX. O termo esteve presente em seus livros da época e em 1976 ele presidiu um evento que tinha esse nome e deu origem ao termo.</p>
                </div>

                <div>
                    <p class="SaibaMaisTitulo"> Saiba Mais</p>
                    <p class="SaibaMaisTexto">O livro intitulado “<em>Information Anxiety</em>” (WURMAN, 1991), traduzido para português como “Ansiedade de informação: como transformar informação em compreensão”, defende que <strong>não temos explosão de informação, mas sim de dados</strong>. Segundo Wurman, há uma distância grande entre os dados se tornarem informação, que é ainda maior para se tornarem algo compreensível. </p>
                </div>

                <div>
                    <p class="CuriosidadeTitulo"> Curiosidade</p>
                    <p class="CuriosidadeTexto">Wurman é também um dos criadores do famoso TED — <em>Technology, Entertainment and Design</em>, que é um círculo de palestras rápidas que explora temas diversos em um formato inovador.</p>
                </div>
                <hr>

                <div>
                    <p class="SubTitulo">1970 - UI</p>
                    <p class="Texto">Por volta de 1970, pesquisadores da área computacional iniciam estudos sobre <strong>a interface com o usuário</strong>, do inglês <strong>UI – <em>user interface</em></strong>, também conhecida por interface homem-máquina. A sofisticação dos sistemas computacionais iriam solicitar um termo mais abrangente na década seguinte.</p>
                </div>

                <div>
                    <p class="SubTitulo">1980 - IHC</p>
                    <p class="Texto">Em meados dos anos 80, o termo <strong>IHC</strong> é adotado por possuir um enfoque mais multidisciplinar, como é necessário para a nova área de estudo. Preece (2013) esclarece que, mais do que o projeto de interface, a área de IHC se preocupa com as comunicações ou interações entre usuários e computadores, definição já discutida na seção “2.1. Áreas de estudo em IHC”.
                    </p>
                </div>

                <div>
                    <p class="SubTitulo">1988 - “O design do dia-a-dia”</p>
                    <p class="Texto">Em 1988 Don Norman, cientista cognitivo, publicou o livro “O Design do Dia-a-dia”. No livro, Norman descreve a psicologia por trás do que ele chama de design “bom” e “ruim” por meio de estudos de caso. Baseado nestes resultados, ele propõe princípios de design.
                    </p>
                </div>

                <div>
                    <p class="SaibaMaisTitulo"> Saiba Mais</p>
                    <p class="SaibaMaisTexto"><strong>Don Norman</strong> é Design Thinker, Cientista Cognitivo, e um dos maiores estudiosos de design UX. É professor emérito de ciência cognitiva na Universidade da Califórnia em San Diego, professor de ciência da computação na Universidade Northwestern, leciona na Universidade de Stanford e é co-fundador do Nielsen Norman Group, considerado atualmente o grupo mais consolidado da área.
                    </p>
                </div>

                <div class="text-center">
                    <p class="TituloFigura"><strong>Figura 17:</strong> Don Norman</p>
                    <a href="imagens/Figura17.png" data-toggle="lightbox" data-footer="Don Norman">
                        <img class="img-fluid" src="imagens/Figura17.png" alt="Figura 17 - Don Norman">
                    </a>
                    <p class="fonte FonteFigura"> UXDesign </p>
                </div>
                <hr>

                <div>
                    <p class="SubTitulo">1990 - UX</p>

                    <p class="Texto">Don Norman popularizou o termo “<strong>user experience</strong>” enquanto trabalhava na Apple nos anos 90. Recentemente Norman falou sobre o termo UX em um vídeo da NNGroup e relembrou de como a experiência de utilizar um computador era fraca, complexa e chegava até a dar medo. Eram estes pontos que o departamento de Arquitetura de Experiência do Usuário da Apple, onde ele trabalha, buscava melhorar. Ele também afirma que o termo hoje está sendo utilizado de forma indevida, pois desenhar uma interface não significa trabalhar na experiência do usuário. De acordo com ele, experiência do usuário “<strong>é a forma como você vê o mundo, é a forma como você experimenta sua vida, ou um serviço, ou um aplicativo</strong>".</p>

                    <p class="Texto">Além do termo UX, Norman disseminou termos da área bastante utilizados hoje. Entre estes, “<strong>design centrado no usuário</strong>” (<em>User Centered System Design</em>), que é utilizado para descrever o design baseado nas necessidades do usuário, considerando estética, por exemplo, como algo secundário. O design centrado no usuário envolve simplificar a estrutura de tarefas, tornando coisas mais visíveis, criando correspondências corretas para controles e funcionalidades, explorando o poder das limitações, e projetando interfaces para suportar erros.</p>
                </div>

                <div>
                    <p class="SubTitulo">1994 - Heurísticas de Nielsen</p>

                    <p class="Texto">É nesse momento que conhecemos o segundo nome mais importante atualmente na área: <strong>Jakob Nielsen</strong>. Em 1994, Jakob Nielsen publicou o livro “Engenharia de Usabilidade”, que traz uma definição sobre métodos de pesquisa para usuários e compila boas práticas da área.</p>

                    <p class="Texto">Em 1994, Nielsen publicou as <strong>10 heurísticas de usabilidade</strong>, ainda hoje bastante utilizadas. As heurísticas de Nielsen, como são chamadas, são a base dos critérios de boas práticas de usabilidade. Elas servem como base para criação de outras heurísticas e práticas. Apesar de não terem sido as primeiras, ao longo do tempo passaram a ser as mais populares. Hoje as heurísticas são utilizadas em vários momentos do processo de design. Junto com as heurísticas, Nielsen divulgou um método de inspeção de usabilidade que era barato, rápido e fácil de aplicar.</p>
                </div>

                <div>
                    <p class="SaibaMaisTitulo"> Saiba Mais</p>
                    <p class="SaibaMaisTexto"><strong>Jakob Nielsen</strong> é um cientista da computação com Ph.D. em interação homem-máquina. É um <em>User Advocate</em> (a prática de usar porta-vozes designados para facilitar a interação entre usuários e designers dos produtos que utilizam) e diretor da Nielsen Norman Group, que ele co-fundou com o Don Norman..
                    </p>
                </div>

                <div class="text-center">
                    <p class="TituloFigura"><strong>Figura 18:</strong> Jakob Nielsen</p>
                    <a href="imagens/Figura18.png" data-toggle="lightbox" data-footer="Jakob Nielsen">
                        <img class="img-fluid" src="imagens/Figura18.png" alt="Figura 18 - Jakob Nielsen">
                    </a>
                    <p class="fonte FonteFigura"> Google </p>
                </div>
                <hr>

                <div>
                    <p class="SubTitulo">2000 - A era dos dispositivos portáteis</p>

                    <p class="Texto">Neste início de século XXI, nós vivemos a popularização dos <em>smartphones</em> e mais recentemente de dispositivos vestíveis, como relógios inteligentes. Os critérios de usabilidade tornaram-se mais especializados a cada evolução dos sistemas e ganham cada vez mais espaço no mundo da tecnologia.</p>

                    <p class="Texto">Hoje não é mais um privilégio das grandes empresas ter um departamento ou equipe dedicada à experiência do usuário. O número de profissionais e especialistas na área de projeto de interação cresce na medida em que a demanda por produtos mais usáveis é solicitada por usuários (Rebelo, 2009). Aos poucos todos se dão conta que há um retorno positivo no cuidado com a qualidade da interação.</p>

                    <p class="Texto">Em meio a uma pandemia, percebemos o quanto os dispositivos e sistemas nos conectam e estão presentes em nosso dia a dia. Como vocês viram, ao longo da história dessa área de estudo, muitos termos e especialidades foram envolvidos para tratar do mesmo assunto: interação com interfaces de sistemas. Hoje é possível falar tanto de UX quanto da arquitetura da informação de um sistema, pois os termos que vieram de diferentes disciplinas coexistem. Essa rede complexa de disciplinas busca as soluções mais adequadas às pessoas. Como você vê o futuro dessa área?</p>
                </div>

                <div>
                    <p class="AtividadeTitulo"> Atividade 4 </p>
                    <p class="AtividadeTexto">
                        Após conhecer a história e os termos importantes para UX, relembre dois sistemas que você já utilizou e apresentaram uma interação ruim. Quais pontos destas interfaces eram marcantes para esta interação ruim? Tente utilizar os termos históricos de UX.
                    </p>
                </div>
                <hr>

                <div>
                    <p class="SubTitulo">A evolução das interfacess</p>

                    <p class="Texto">Todos os fatos históricos apresentados acompanharam a evolução das interfaces computacionais. Entender de uma forma global a evolução das interfaces explica como a área cresceu e se popularizou. Segundo Fernandez (2007), a evolução das interfaces se apresenta da seguinte forma:</p>

                    <ul class="Texto pl-5">
                        <li>Anos 1950: Interface de hardware “para engenheiros” com diversos botões de interação</li>
                        <li>Anos 1960-1970: Interface de programação (COBOL, FORTRAN)</li>
                        <li>Anos 1970-1990: Interface de terminais (linguagens de comando)</li>
                        <li>Anos 1980: Interface de interação para diálogo (GUIs, multimídia)</li>
                        <li>Anos 1990: Interface para realizar trabalho (redes e grupos)</li>
                        <li>A partir de 2000: Interface torna-se onipresente (Aparelhos celulares, bluetooth, dispositivos móveis, eletrônicos, por toda a parte, telas interativas e muitas tecnologias embarcada)</li>
                    </ul>
                </div>

                <br><br>

                <div class="text-center">
                    <a href="Topico02.1.5.php" type="button" class="btn btn-outline-success btn-sm">Página anterior</a>
                    <a href="Topico04.php" type="button" class="btn btn-outline-success btn-sm">Próxima página</a>
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