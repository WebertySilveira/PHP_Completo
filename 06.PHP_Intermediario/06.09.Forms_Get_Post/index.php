<html>
    <head>
        <title>Formulários</title>
    </head>

    <body>

<?php
//Pegando entradas do formulário e manipulando
    if(isset($_POST['acao'])) {
     
        $nome = $_POST['nome'];
        $email = $_POST['email'];

        echo $nome. '<br>' .$email;

    }
?>

        <form method = "post">
            <input type="text" name="nome" />
            <input type="text" name="email" />
            <input type="submit" name="acao" value="Enviar"/>
        </form>






<?php
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

//Manipulando numeros
    if(isset($_POST['aca'])) {
        echo @$_POST['numero1'] + @$_POST['numero2'];
    }
?>

        <form method = "post">
            <input type="text" name="numero1" />
            <input type="text" name="numero2" />
            <input type="submit" name="aca" value="Enviar"/>
        </form>





<?php
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

//Usando Select
    if(isset($_POST['aca'])) {
        echo $_POST['nome'];
    }
?>

        <form method = "post">
            <select name="nome">
                <option value ="Guilherme">Guilherme</option>
                <option value ="João">Joao</option>
            </select>
            <input type="submit" name="aca" value="Enviar"/>
        </form>





<?php
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
//Usando Checkbox
    if(isset($_POST['ac'])) {
        foreach ($_POST['valor'] as $key => $value) {
            echo $value.'<br>';
        }
    }
?>

        <form method = "post">
            <input type = "checkbox" name = "valor[]" value = "10">10
            <input type = "checkbox" name = "valor[]" value = "20">20
            <input type = "checkbox" name = "valor[]" value = "30">30
            <input type = "checkbox" name = "valor[]" value = "40">40
            <input type="submit" name="ac" value="Enviar"/>
        </form>


    </body>
</html>