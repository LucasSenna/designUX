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

                <h2 class="font-bold">5. Quem é usuário?</h2>
                <hr>

                <p class="Texto">Agora vamos entender agora <strong>quem é o usuário</strong> que citamos durante todo o curso. Afinal, se vamos trazê-lo ao centro do design, precisamos saber de que forma devemos encontrá-lo.</p>

                <p class="Texto">Uma premissa bastante utilizada durante reuniões em equipes de desenvolvimento de software é: “Eu, como usuário, faria …”. A partir deste momento algum desenvolvedor ou outro perfil da equipe se coloca no papel de usuário e estabelece alguma opinião sobre a interface ou interação que ele próprio está construindo. Vemos dois grandes problemas nessa forma de dar opinião:</p>

                <ul class="Texto pl-5">
                    <li>Os usuários reais em sua grande maioria não desenvolvem os sistemas que utilizam.</li>
                    <li>Perfis dentro de uma equipe de desenvolvimento de sistemas tendem a ter um conhecimento avançado em tecnologias, isto também é algo muito diferente da realidade da maioria dos usuários.</li>
                </ul>

                <p class="Texto">Apesar de o termo ser simples, há muitas interpretações para o termo “usuário” e envolvê-los de forma correta é fundamental para um design centrado no usuário bem-sucedido. De acordo com Rogers e Preece (2013), a definição mais óbvia diz respeito às “<strong>pessoas que interagem diretamente com o produto para realizar uma tarefa</strong>”. Porém, outros autores apresentam mais definições relacionadas.</p>

                <p class="Texto">Rogers e Preece (2013) citam outro autor que elenca usuário primários, secundários e terciários, que são definidos como:</p>

                <ul class="Texto pl-5">
                    <li>Usuário primários: são aqueles propensos a serem usuários frequentes do sistema;</li>
                    <li>Usuários secundários: são usuários ocasionais ou aqueles que usam através de um intermediário;</li>
                    <li>Usuários terciários: são aqueles afetados pela introdução do sistema ou que influenciarão sua compra.</li>
                </ul>

                <p class="Texto">Os projetos em geral possuem um conjunto grande de pessoas que estão relacionadas a ele, que são chamadas de <em>stakeholders</em>, ou partes interessadas em português. As partes interessadas têm influência direta ou indireta sobre os requisitos do sistema. Sobre todos esses perfis, é importante ressaltar <strong>que o cliente nem sempre é o usuário final</strong>. Então, para manter o foco no usuário, é interessante se questionar se os requisitos que são recebidos pelo cliente estão resolvendo as necessidades do usuário. Este questionamento não é fácil de ser colocado dentro do contexto empresarial, mas é importante para o resultado final.</p>

                <p class="Texto">Outra premissa que surge dentro do contexto de desenvolvimento do software é que “<strong>os usuários são burros</strong>” quando não conseguem se adequar à uma interação proposta. Alguns opositores do movimento de usabilidade também utilizam-se dessa premissa, afirmando que usabilidade se foca em usuários burros e que a maioria dos “outros” usuários podem facilmente superar a complexidade proposta por um sistema (Nielsen, 2001). </p>

                <p class="Texto">Como vimos anteriormente, nem sempre o modelo conceitual apresentado numa interface irá representar o modelo mental de seus usuários. Porém a resposta a este questionamento não está de fato nessa questão. De acordo com Nielsen (2001), <strong>até usuários inteligentes preferem atingir seus próprios objetivos ao navegar em sistemas de forma pessoal</strong>. Não é uma questão de saber se os usuários são capazes de superar a complexidade e aprender uma interface de usuário avançada. É uma questão de saber se eles estão dispostos a fazê-lo.</p>

                <div>
                    <p class="AtividadeTitulo"> <br>Atividade 5</p>
                    <p class="AtividadeTexto">Escolha três aplicativos do seu celular e tente descrever um perfil de usuário e de cliente para cada.</p>
                    <p class="Texto">
                        <small><i class="fa fa-info-circle fa-lg Azul" aria-hidden="true"></i> Essa atividade é apenas para fins de exercitar o conteúdo já visto, não será avaliada pela equipe no final do curso, portanto, não precisa ser enviada para correção.</small>
                    </p>
                </div>
                <hr>

                <br><br>

                <div class="text-center">
                    <a href="Topico04.php" type="button" class="btn btn-outline-success btn-sm">Página anterior</a>
                    <a href="Topico06.php" type="button" class="btn btn-outline-success btn-sm">Próxima página</a>
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