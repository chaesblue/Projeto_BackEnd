<?php
// Conexão com o banco
include('conexao.php'); // deve definir $conn

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
    // Recebendo dados do formulário (sempre verificar/filtrar em produção)
    $nome          = $_POST['nome'] ?? '';
    $sobrenome     = $_POST['sobrenome'] ?? '';
    $DataNascimento= $_POST['dataNascimento'] ?? null;
    $NomeMaterno   = $_POST['nomeMaterno'] ?? '';
    $Cpf           = $_POST['cpf'] ?? '';
    $sexo          = $_POST['sexo'] ?? '';
    $cep           = $_POST['cep'] ?? '';
    $endereco      = $_POST['endereco'] ?? '';
    $bairro        = $_POST['bairro'] ?? '';
    $estado        = $_POST['estado'] ?? '';
    $cidade        = $_POST['cidade'] ?? '';
    $email         = $_POST['email'] ?? '';
    $senha         = $_POST['senha'] ?? '';
    $telefone      = $_POST['telefoneCelular'] ?? '';

    // Criptografa a senha
    $hash = password_hash($senha, PASSWORD_DEFAULT);
    
    // 1) Verificar CPF
    $stmt = $conn->prepare("SELECT 1 FROM usuarios WHERE cpf = ? LIMIT 1");
    $stmt->bind_param("s", $Cpf);
    $stmt->execute();
    $stmt->store_result();
    if ($stmt->num_rows > 0) {
        // CPF duplicado
        $stmt->close();
        // aqui você pode redirecionar com querystring de erro ou mostrar mensagem
        header('Location: cadastro.php?erro=cpf_duplicado');
        exit;
    }
    $stmt->close();

    // 3) Inserir (se passou nas verificações)
    $sql = "INSERT INTO usuarios
    (cpf, nome, sobrenome, nomeMaterno, sexo, endereco, bairro, estado, cep, cidade, email, senha, telefoneCelular, DataNascimento) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        // Erro na preparação do statement
        header('Location: erroGeral.php');
        exit;
    }

    $stmt->bind_param(
        "ssssssssssssss",
        $Cpf,
        $nome,
        $sobrenome,
        $NomeMaterno,
        $sexo,
        $endereco,
        $bairro,
        $estado,
        $cep,
        $cidade,
        $email,
        $hash,
        $telefone,
        $DataNascimento
    );

    if ($stmt->execute()) {
        $stmt->close();
        $conn->close();
        header('Location: login.php');
        exit;
    } else {
        $stmt->close();
        $conexao->close();
        header('Location: erroGeral.php');
        exit;
    }
    }   
    catch (mysqli_sql_exception $e) {
     // Se der erro em qualquer parte, ele vem parar aqui:
        error_log("Erro SQL: " . $e->getMessage());
        header('Location: erroGeral.php');
         exit;
    }
}