<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="suporte.css">
    <link rel="icon" href="image/icon.png">
    <title>&lt;/suporte&gt;</title>
</head>
<body>

    <!--DAQUI ATÉ-->
    <header id="header">
        <div id="contatos">
            <nav id="barra_top">
                <a id="a2" href="contato.html" target="_self">CONTATO</a>
                <a id="a3" href="https://www.hostinger.com" target="_blank">HOSPEDAR</a>
                <a id="logosin" href="index.html" target="_self"><h1>&lt;/creatorWebSite&gt;</h1></a>
                <a id="a4" href="loja.html" target="_self">LOJA</a>
                <a id="a1" href="suporte.html" target="_self">SUPORTE</a>
            </nav>
        </div>
    </header>
    <!--AQUI É AS INFOS TOP-->

    <!--DAQUI ATÉ--><?php 
        $nome = isset($_POST["name"])?$_POST["name"]:"ERROR";
        $email = isset($_POST["email"])?$_POST["email"]:"ERROR";
        $ass = isset($_POST["assunto"])?$_POST["assunto"]:"ERROR";
        $prob = isset($_POST["area"])?$_POST["area"]:"ERROR";
        echo "  <center style='color:red;'><br><br><br><br>
                    <h1>SUPORTE ENVIADO</h1><br>
                    <h2>Nome<br> $nome</h2><br><br>
                    <h2>Email<br> $email</h2><br><br>
                    <h2>Assunto<br> $ass</h2><br><br>
                    <h2 style='width: 700px;'>Problema<br> $prob</h2><br><br>
                </center>"
        ?>
    <!--AQUI É CONTEUDO DO SITE-->

    <!--DAQUI ATÉ-->
    <footer>
        <div id="div-pe">
            <h4>Criado por Gustavo Schultz</h4>
            <h4><a href="#" style="text-decoration: none;">Politicas de Privacidades</a></h4>
        </div>
        <div id="direita">
            <a href="#"><img id="img1" src="image/insta.png" alt="Icone do Instagram"></a>
            <a href="#"><img id="img2" src="image/link.png" alt="Icone do Linkedin"></a>
            <a href="#"><img id="img3" src="image/skype.png" alt="Icone do Skype"></a>
        </div>
    </footer>
    <!--AQUI É O FOOTER-->
</body>
</html>