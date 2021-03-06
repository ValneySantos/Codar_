<?php
	include 'conexao.php';

    session_start();
    if(!isset($_SESSION["email"]) || !isset($_SESSION["senha"])){
        header("Location: login.html");
        exit;
    } else{
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/styles.css">
    <title>Codar_</title>
</head>

<body>
    <!-- - html [x]
- head [x]
- title [x]
- body [x]
-  p [x]
- ul [x]
- ol [x]
- a [x]
- br [x]
- img [x]
- iframe [x]
- Formulários (opcional) -->
    <header>
        <div class="container">
            <div class="logo">Codar_</div>
            <div class="nav-bar">
                <ul>
                    <li><a href="home.html">Home</a></li>
                    <li><a href="">Sobre</a></li>
                    <li><a style="background-color: #D6000D; color: #fff;" href="logout.php">Sair</a></li>
                </ul>
            </div>
        </div>
    </header>

    <section class="section-home section-container ">
        <div class="content-block">
            <div class="img-home content-block-item "></div>
            <div class="container-home content-block-item ">
               
                    <p>Criação de sites Personalizados</p>
                    <div class="title-home">Criação de Sites</div>
                    <div class="button-home">Solicitar orçamento</div>
            </div>
        </div>
    </section>
   
    <section class="section-sobre section-container ">
        <div class="content-block">
            <div class="container-sobre content-block-item ">               
                <ol>
                    <li>Domínio personalizado</li>
                    <li>Hospedagem</li>
                    <li>Site responsivo</li>
                    <li>Redes sociais</li>
                    <li>Chat online</li>
                    <li>Blog integrado</li>
                </ol>
                <p>Criação de sites Personalizados</p>
               <div class="form-sobre">
                <div class="input-sobre"><input placeholder="Celular" type="text"></div>
                <div class="button-sobre">Ligamos para você</div>
               </div>
            </div>
            <div class="img-sobre content-block-item "></div>
           
        </div>
    </section>

    <section class="section-servicos">
        <div class="content-servicos">
            <div class="post-servicos">
                <div class="content-post-servicos">
                    <div class="title">Converse conosco</div>
                    <p class="text">Em nossa tratativa entenderemos suas necessidades, assim podendo iniciar um projeto exclusivo para o seu site.</p>
                    <a href="#">Saiba mais +</a>
                </div>
            </div>
        </div>
        <div class="content-servicos">
            <div class="post-servicos">
                <div class="content-post-servicos">
                    <div class="title">Desenvolvimento do Site</div>
                    <p class="text">Nossa equipe iniciará o projeto e desta forma desenvolverá o que há de melhor para você.</p>
                    <a href="#">Saiba mais +</a>
                </div>
            </div>
        </div>
        <div class="content-servicos">
            <div class="post-servicos">
                <div class="content-post-servicos">
                    <div class="title">Pronto para decolar</div>
                    <p class="text">Por fim, finalizaremos o seu site e o deixaremos pronto para novas conquistas.</p>
                    <a href="#">Saiba mais +</a>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container-footer">
            <div class="footer-block">
                <div class="title-sobre-footer">Sobre</div>
                <div class="text-sobre-footer">Amamos criar soluções e entregar sites incríveis</div>
            </div>
            <div class="footer-block">
                <div class="title-sobre-footer">Codar_</div>
                <div class="text-sobre-footer">Criamos websites </div>
            </div>
            <div class="footer-block">
                <div class="title-sobre-footer">Contato</div>
                <div class="text-sobre-footer">Codó - MA  123 <br> +55 1234 123 </div>
            </div>
            <div class="footer-block">
                <iframe src="https://www.youtube.com/embed/hwyVMjCG_nc?autoplay=1" title=""></iframe>       
                </div>
        </div>
    </footer>
</body>
</html>