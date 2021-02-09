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

                <h3 class="font-bold">Referências</h3>
                <hr>

                <ul style="list-style: none;">
                    <li>
                        <i class="fa fa-book fa-lg CorLaranja" aria-hidden="true"></i>
                        BARBOSA, Simone; SILVA, Bruno. <strong>Interação humano-computador</strong>. Elsevier Brasil, 2010.
                    </li>
                    <li>
                        <i class="fa fa-book fa-lg CorLaranja" aria-hidden="true"></i>
                        ROGERS, Yvonne; SHARP, Helen; PREECE, Jennifer. <strong>Design de Interação</strong>. Bookman Editora, 2013.
                    </li>
                    <li>
                        <i class="fa fa-book fa-lg CorLaranja" aria-hidden="true"></i>
                        HEWETT, Thomas T. et al. <strong>ACM SIGCHI curricula for human-computer interaction</strong>. ACM, 1992.
                    </li>
                    <li>
                        <i class="fa fa-book fa-lg CorLaranja" aria-hidden="true"></i>
                        Nomofobia: uso abusivo de celular gera novas doenças. Diário do Nordeste. Fortaleza, Ceará, 2019.
                    </li>
                    <li>
                        <i class="fa fa-book fa-lg CorLaranja" aria-hidden="true"></i>
                        WEST, Mark; KRAUT, Rebecca; EI CHEW, Han. I'd blush if I could: closing gender divides in digital skills through education. 2019.
                    </li>
                    <li>
                        <i class="fa fa-book fa-lg CorLaranja" aria-hidden="true"></i>
                        BOSTROM, Nick; YUDKOWSKY, Eliezer. The ethics of artificial intelligence. <strong>The Cambridge handbook of artificial intelligence</strong>, v. 1, p. 316-334, 2014.</li>
                    <li>
                        <i class="fa fa-book fa-lg CorLaranja" aria-hidden="true"></i>
                        GOVERNO DO RIO GRANDE DO SUL, Manual para uso não sexista da linguagem. Porto Alegre, 2014.
                    </li>
                    <li>
                        <i class="fa fa-book fa-lg CorLaranja" aria-hidden="true"></i>
                        CHEOK, Adrian David. Kawaii/cute interactive media. In: <strong>Art and technology of entertainment computing and communication</strong>. Springer, London, 2010. p. 223-254.
                    </li>
                    <li>
                        <i class="fa fa-book fa-lg CorLaranja" aria-hidden="true"></i>
                        DE SOUZA, André Antônio; GRIMALDI, Madalena Ribeiro. AS MARCAS CONTEMPORÂNEAS E SUAS PECULIARIDADES GRÁFICAS. 2015.
                    </li>
                    <li>
                        <i class="fa fa-book fa-lg CorLaranja" aria-hidden="true"></i>
                        MORAN, Thomas P.; CARROLL, John M. Design <strong>rationale: Concepts, techniques, and use</strong>. L. Erlbaum Associates Inc., 1996.
                    </li>
                    <li>
                        <i class="fa fa-book fa-lg CorLaranja" aria-hidden="true"></i>
                        WEINSCHENK, S. The secret to designing an intuitive UX: Match the mental model to the conceptual model. <strong>Retrieved</strong>, v. 12, n. 11, p. 2010, 2010.
                    </li>
                    <li>
                        <i class="fa fa-book fa-lg CorLaranja" aria-hidden="true"></i>
                        GOTHELF, Jeff. <strong>Lean UX: Applying lean principles to improve user experience</strong>. " O'Reilly Media, Inc.", 2013.
                    </li>
                    <li>
                        <i class="fa fa-book fa-lg CorLaranja" aria-hidden="true"></i>
                        MACEDO, Paula. Origens de User Experience. UX Collective. 2014. Disponível em
                        <a href="https://brasil.uxdesign.cc/origens-de-user-experience-9d23f67f7c77" target="_blank">
                            https://brasil.uxdesign.cc/origens-de-user-experience-9d23f67f7c77 </a>.
                    </li>
                    <li>
                        <i class="fa fa-book fa-lg CorLaranja" aria-hidden="true"></i>
                        REBELO, Irla B. <strong>Interação e avaliação</strong>. Apostila. Brasília, DF. Última atualização em novembro de 2009. Disponível em <a href="irlabr.wordpresss.com" target="_blank">irlabr.wordpresss.com</a>.
                    </li>
                    <li>
                        <i class="fa fa-book fa-lg CorLaranja" aria-hidden="true"></i>
                        WURMAN, Richard Saul. <strong>Ansiedade de Informação</strong> Como Transformar Informação em Compreensão. São Paulo: Cultura Editora Associados, 1991.
                    </li>
                    <li>
                        <i class="fa fa-book fa-lg CorLaranja" aria-hidden="true"></i>
                        FERNANDEZ, Amyriz. Usabilidade & Governo Eletrônico. <strong>Usabilidade & Design de Interação</strong>. <a href="www.UsabilityExpert.com.br" target="_balnk">www.UsabilityExpert.com.br</a> Material de curso de usabilidade, 2007.
                    </li>
                    <li>
                        <i class="fa fa-book fa-lg CorLaranja" aria-hidden="true"></i>
                        SAFFER, Dan. <strong>Designing for interaction: creating innovative applications and devices</strong>. New Riders, 2010
                    </li>
                    <li>
                        <i class="fa fa-book fa-lg CorLaranja" aria-hidden="true"></i>
                        NIELSEN, Jakob. <strong>Are users stupid</strong>? The Psychology of Everyday Things, Basic Books, New York, 2001. Disponível em: <a href="https://www.nngroup.com/articles/are-users-stupid/" target="_blank">https://www.nngroup.com/articles /are-users-stupid/</a>
                    </li>
                </ul>

                <br><br>

                <div class="text-center">
                    <a href="Topico06.php" type="button" class="btn btn-outline-success btn-sm">Página anterior</a>
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