<?php
//Conectando-se ao banco de dados
    $pdo = new PDO('mysql:host=localhost;dbname=08_pdo','root', '');

//Preparando comandos e enviando "Melhora a segurança, evitando sql Injection (Mais detalhes no exemplo abaixo)
    $sql = $pdo->prepare("INSERT INTO `clientes` VALUES (null, 'Weberty', 'Silveira','2020-08-26 14:40:00')");
    $sql->execute();












//Pegando de um formulário
    date_default_timezone_set('America/Fortaleza');

    if (isset($_POST['acao'])) {

        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $momento_registro = date('Y-m-d H:i:s');

//Não coloque as  variáveis no prepare, evita sql injection
        $sql = $pdo->prepare("INSERT INTO `clientes` VALUES (null, ?, ?, ?)");
        $sql->execute(array($nome, $sobrenome, $momento_registro));

    }
?>



<html>
    <head>
        <title>Cadastro no Banco</title>
    </head>

    <body>
        <form method = 'post'>
            <input type = 'text' name = 'nome' required>
            <input type = 'text' name = 'sobrenome' required>
            <input type = 'submit' name = 'acao' value = 'Enviar' required>
        </form>
    </body>
</html>
