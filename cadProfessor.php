<?php
if(isset($_POST['submit'])){

include_once('conecta.php');

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];

$result = mysqli_query($conexao, "INSERT INTO professores(nome, email, telefone) VALUES('$nome', '$email', '$telefone')");
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <title>Cadastro de Aluno</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
     <nav>
        <div class="navbar">
            <div class="logo"><a href="main.html">Clube Eldorado</a></div>
            <ul class="menu">
                <li><a href="main.html">Pagina Inicial</a></li>
                <li><a href="cadAluno.php">Cadastro de Alunos</a></li>
                <li><a href="cadProfessor.php">Cadastro de Professores</a></li>
                <li><a href="login.html">Sobre</a></li>
                <li><a href="login.html">Login</a></li>
                
            </ul>
        </div>
    </nav> 
 <form action="cadProfessor.php" method="POST">
    <div class="prof">
        <h1>Professor</h1>
        <h3>Favor preencher os campos abaixo</h3>
        <h5>Nome</h5>
        <input type="text" name="nome" placeholder="Nome completo...">
        <br><br>
        <h5>Email</h5>
        <input type="text" name="email" placeholder="Email...">
        <br><br>
        <h5>Telefone</h5>
        <input type="text" name="telefone" placeholder="(00) 00000-0000">
        <br>
        <input onclick="abrirAlerta();"  type="submit" name="submit" id="submit">
    </div>
</form>

    <footer class="footerP">
        <div class="wrapper">
            <Div class="footer-box">
                <div class="company-footer">
                    <h2>Ecolinha Boa</h2>
                </div>
            </Div>
            <Div class="footer-box">
                <div class="articles-footer">
                    <h2>
                        Menu
                    </h2>
                    <uL>
                        <li>
                            <a href="main.html">Pagina Inicial</a>
                        </li>
                        <li>
                            <a href="cadAluno.php">Cadastro de Alunos</a>
                        </li>
                        <li>
                            <a href="cadProfessor.php">Cadastro de Professores</a>
                        </li>
                        <li>
                            <a href="login.html">Login</a>
                        </li>
                    </uL>
                </div>
            </Div>
            <Div class="footer-box">
                <h2>Encontre nos nas redes sociais</h2>
                <ul class="footer-list">
                    <li>
                        <a href="#">
                            <i class="fab fa-facebook-square"></i>
                            <spam>Facebook</spam>
                        </a>
                    </li>
                </ul>
            </Div>
        </div>
        <div class="footer-bottom">
            <Div class="wrapper">
                <p>@PUCMINAS 2023</p>
            </Div>
    
        </div>
    </footer>
</body>

<script src="https://unpkg.com/sweetalert@2.1.2/dist/sweetalert.min.js">
    function abrirAlerta(){
        alert('Cadastro Realizado com Sucesso');
    }
</script>

</html> 