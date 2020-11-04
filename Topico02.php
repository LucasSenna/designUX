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

                    <p class="Texto">O exemplo que foi apresentado na seção de Apresentação explora conceitos de IHC aplicados a produtos físicos. IHC, entretanto, tem foco em sistemas computacionais. Desta forma seguiremos a partir daqui com exemplos de sistemas que podem ser aplicativos de celulares, como Whatsapp, softwares que você utiliza no computador, como Microsoft Word, sistemas embarcados em outros dispositivos, como sistemas que estão presentes nos caixas eletrônicos do seu banco, dentre outros. Isto não impede, porém, que os conceitos sejam utilizados de forma ampla em outros aspectos da vida. </p>

                    <p class="Texto"><strong>Interação Humano-Computador (IHC)</strong> é uma subárea da computação que está interessada na qualidade de uso de sistemas e no impacto destes sistemas na vida de seus usuários (Barbosa e Silva, 2010). IHC tem um foco diferente de Engenharia de Software, que busca proporcionar sistemas interativos mais eficientes, robustos, livres de erros e de fácil manutenção. Essas características de Engenharia de Software não garantem qualidade de uso, logo é possível ter um sistema robusto e livre de erros, que seja difícil de ser compreendido pelo usuário e pouco útil para ele.</p>

                    <p class="Texto">Diante desse cenário, há duas possibilidades para construção de um software: (a) de dentro para fora e (b) de fora para dentro.</p>

                    <div class="text-center">
                        <p class="TituloFigura"><strong>Figura 2:</strong> Abordagens de desenvolvimento</p>
                        <a href="imagens/Figura02.png" data-toggle="lightbox" data-footer="Figura 2 - Abordagens de desenvolvimento">
                            <img class="img-fluid" src="imagens/Figura02.png" alt="Figura 2 - Abordagens de desenvolvimento">
                        </a>
                        <p class="FonteFigura">Fonte: Barbosa e Silva, 2010</p>
                    </div>

                    <p class="Texto">Qual destas abordagem você considera a mais correta? A resposta é que não há uma abordagem correta e sim especificidades de construção do software que necessitam de uma ou outra abordagem.</p>

                    <div>
                        <p class="FiqueAtentoTitulo"> Fique Atento</p>
                        <p class="FiqueAtentoTexto">Cada projeto possui uma realidade própria, que inclui tecnologias escolhidas, limitações de recursos, processo de desenvolvimento etc, assim como há um propósito para o qual o projeto existe. É necessário analisar esta realidade para definir características de projeto, como, por exemplo, a abordagem de desenvolvimento. Este é um dos papéis dos analistas de sistemas.</p>
                    </div>

                    <p class="Texto">A concepção de <strong>dentro para fora</strong> tem ênfase na representação de dados e algoritmos que processam estes dados, assim como na arquitetura do sistema. Não é dada atenção a como esse software será utilizado e normalmente se pressupõe que haverá um esforço de quem o utiliza para que compreendê-lo bem. Por exemplo, sistemas que interagem somente com outros sistemas podem utilizar-se bem dessa abordagem para ter qualidade de construção como prioritária e se ajustar corretamente às limitações dos projetos.</p>

                    <p class="Texto">Esta abordagem é concebida em grande parte da Computação (Barbosa e Silva, 2010) e como resultado é comum que sistemas que possuem uma grande abrangência de usuários tenham interfaces não apropriadas.</p>

                    <p class="Texto">Para uma interface mais alinhada com o uso real do sistema, podemos utilizar a abordagem de <strong>fora para dentro</strong>, que começa investigando os atores envolvidos, seus interesses, objetivos, atividades, responsabilidades, motivações, os artefatos utilizados, o domínio, o contexto de uso, dentre outros  (Barbosa e Silva, 2010), para somente depois identificar oportunidades de intervenção na interação atual e como essa estrutura será viabilizada pelas tecnologias utilizadas.</p>

                    <p class="SubTitulo">2.1. Áreas de estudo em IHC</p>

                    <p class="Texto">IHC é uma disciplina interessada no projeto, implementação e avaliação de sistemas computacionais interativos (Hewett et al., 1992). <strong>IHC nesse sentido fornece explicações e previsões para fenômenos de interação usuário-sistema e resultados práticos para design da interface de usuário</strong>. A Figura 3 apresenta essa definição, estabelecendo a conexão entre previsão e design e entre explicação e avaliação. Design e avaliação que são duas áreas de atuação em IHC e consequentemente em design UX.</p>

                    <div class="text-center">
                        <p class="TituloFigura"><strong>Figura 3:</strong> Principais conceitos de IHC</p>
                        <a href="imagens/Figura03.png" data-toggle="lightbox" data-footer="Figura 3 - Principais conceitos de IHC">
                            <img class="img-fluid" src="imagens/Figura03.png" alt="Figura 3 - Principais conceitos de IHC">
                        </a>
                        <p class="FonteFigura">Fonte: Barbosa e Silva, 2010</p>
                    </div>

                    <p class="Texto">De acordo com Hewett, em seu livro sobre currículo para IHC “<em>ACM SIGCHI curricula for human-computer interaction</em>” (Hewett <em>et al</em>., 1992), é possível entender IHC dentro de um contexto de 5 aspectos inter-relacionados:</p>

                    <p class="Texto pl-5">
                        1.	Natureza da interação;<br>
                        2.	Contexto de uso;<br>
                        3.	Características humanas;<br>
                        4.	Sistemas computacionais;<br>
                        5.	Processo de desenvolvimento.<br>
                    </p>

                    <div class="text-center">
                        <p class="TituloFigura"><strong>Figura 4:</strong> Abordagens de desenvolvimento</p>
                        <a href="imagens/Figura04.png" data-toggle="lightbox" data-footer="Figura 4 - Abordagens de desenvolvimento">
                            <img class="img-fluid" src="imagens/Figura04.png" alt="Figura 4 - Abordagens de desenvolvimento">
                        </a>
                        <p class="FonteFigura">Fonte: Barbosa e Silva, 2010</p>
                    </div>

                    <p class="Texto">Na imagem vemos que os sistemas computacionais existem em um ambiente <strong>social, organizacional e de trabalho</strong> mais amplo. Dentro deste contexto existem aplicações para as quais desejamos empregar esses sistemas. Porém o processo de colocar os computadores para funcionar significa que os <strong>aspectos humanos</strong>, técnicos e de trabalho da situação do aplicativo devem ser ajustados uns aos outros por meio da aprendizagem humana, adaptabilidade do sistema ou outras estratégias. </p>

                    <p class="Texto">Além do uso e do contexto social dos computadores, do lado humano também devemos levar em consideração as características de <strong>processamento da informação</strong> humana, <strong>comunicação</strong> e características físicas dos usuários, que envolvem a <strong>ergonomia</strong>.</p>

                    <p class="Texto">Do lado do computador, que hoje representa uma infinidade de dispositivos, como smartphones, relógios inteligentes (<em>smartwatches</em>), dispositivos de assistentes inteligentes e outros, temos uma variedade de tecnologias desenvolvidas para dar suporte à interação com humanos. Essas tecnologias estabelecem <strong>dispositivos de entrada e saída</strong> que conectam o humano e a máquina. Estes dispositivos, também conhecidos por periféricos, que podem ser teclados, câmeras e até batimentos cardíacos, são usados a partir de várias <strong>técnicas</strong> para organizar um diálogo. Essas técnicas, por sua vez, são usadas para implementar elementos de design maiores, como a metáfora da interface. Aprofundando-se nos substratos da máquina que dão suporte ao diálogo, o diálogo pode fazer uso extensivo de técnicas de computação gráfica. </p>

                    <p class="Texto">Nas seções seguintes vamos expandir cada uma das cinco áreas de estudo para compreender melhor essas conexões e a importância da presença de IHC na construção de sistemas.</p>

                    <p class="SubSubTitulo">2.1.1. Natureza da interação</p>

                    <p class="Texto">Texto</p>

                    
                    
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
