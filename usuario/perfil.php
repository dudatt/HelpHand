<?php
include_once '../assets/bd/sessao.php';
$email = $_SESSION['email'];


$sql = "SELECT Nome, Telefone, Email, CPF, Foto, Genero FROM Usuario WHERE Email = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $email);
$stmt->execute();
$result = $stmt->get_result();


if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
} else {
    echo "Nenhum usuário encontrado.";
}

$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="perfilc.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-CzPQD8+6b7Hd30GQ2pPCbLK/20c5vB5F0lZMR+6z4QhoV6eHA/p0B5G94Byjz93B" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap">
    <title>Perfil</title>
</head>
<body>
    <div class="container">
        <!-- Navbar -->
        <?php require '../assets/geral/menu.php'; ?>
        <?php require '../assets/geral/navbar_mobile.php'; ?>
        <?php require '../assets/geral/navbar_desktop.php'; ?>
        <!-- Navbar -->

        <!-- Formulários -->
        <section class="container" style="margin-top: 120px;">
            <div class="row">
                <!-- Parte do perfil -->
                <div class="col">
                    <!-- Imagem do perfil -->
                    <?php if ($user['Foto']) { ?>
                        <div>
                            <img src="data:image/jpeg;base64,<?php echo base64_encode($user['Foto']);?>" alt="Foto de Perfil">
                        </div>
                        <?php } else { ?>
                            <div>
                                <img src="default-avatar.png" class="user">
                        </div>
                    <?php } ?>
                    <!-- Dados do perfil -->
                    <div>
                        <h2 class="nome">Nome: <?php echo htmlspecialchars($user['Nome']); ?></h2>
                        <p class="telefone">Telefone: <?php echo htmlspecialchars($user['Telefone']); ?></p>
                        <h2 class="email">E-mail: <?php echo htmlspecialchars($user['Email']); ?></h2>
                        <h2 class="cpf">CPF: <?php echo htmlspecialchars($user['CPF']); ?></h2>
                    </div>
                </div>

                <div class="col d-flex justify-content-center align-items-center">
                    <div class="linha-vertical" style="margin-right: 230px;"></div>
                </div>
                

                <div class="col" style="margin-right: 290px;">
                    <h1 class="dados">Meus Dados</h1>
                    <form action="processar_formulario.php" method="POST">
                        <div class="form-group">
                            <label for="nome" class="form-label">Nome:</label>
                            <input type="text" class="form-control" id="nome" name="nome" value="<?php echo htmlspecialchars($user['Nome']); ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="email" class="form-label">E-mail:</label>
                            <input type="email" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($user['Email']); ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="senha" class="form-label">Senha:</label>
                            <input type="password" class="form-control" id="senha" name="senha" required>
                        </div>
                        <button type="submit" class="btn btn-primary" name="salvar">Salvar</button>
                    </form>
                </div>           
            </div>
        </section>
    </div>
</body>
</html>