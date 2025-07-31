<?php 
    include '../../config/connection.php';
    include '../../includes/header.php';

    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        $id = isset($_GET['id']) ? $_GET['id'] : exit();

        if (empty($id)) {
            echo "<script>alert('É necessário informar o ID do veículo!');</script>";
            exit();
        }

        $stmt = $pdo->prepare('SELECT * FROM anuncio WHERE id = :id');
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $dados = $stmt->fetchAll();
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $id = isset($_POST['id']) ? $_POST['id'] : exit();

        $titulo = isset($_POST['titulo']) ? $_POST['titulo'] : exit();
        $descricao = isset($_POST['descricao']) ? $_POST['descricao'] : exit();
        $datapubli = isset($_POST['datapubli']) ? $_POST['datapubli'] : exit();
        $marca = isset($_POST['marca']) ? $_POST['marca'] : exit();
        $modelo = isset($_POST['modelo']) ? $_POST['modelo'] : exit();
        $ano = isset($_POST['ano']) ? $_POST['ano'] : exit();
        $cor = isset($_POST['cor']) ? $_POST['cor'] : exit();
        $placa = isset($_POST['placa']) ? $_POST['placa'] : exit();
        $proprietario = isset($_POST['proprietario']) ? $_POST['proprietario'] : exit();
        $telefone = isset($_POST['telefone']) ? $_POST['telefone'] : exit();

        if (!empty($_FILES['imagem']['name'])) {
            $imagem = $_FILES['imagem'];
            $nome_imagem = uniqid() . "-" . $imagem['name'];
            $caminho_imagem = "../../img/$nome_imagem";
            move_uploaded_file($imagem['tmp_name'], $caminho_imagem);
        } else {
            $stmt = $pdo->prepare('SELECT imagem FROM anuncio WHERE id = :id');
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            $imagem = $stmt->fetch();
            $nome_imagem = $imagem['imagem'];
        }

        $stmt = $pdo->prepare('UPDATE anuncio SET titulo = :titulo, descricao = :descricao, datapubli = :datapubli, marca = :marca, modelo = :modelo, ano = :ano, cor = :cor, placa = :placa, proprietario = :proprietario, telefone = :telefone, imagem = :imagem WHERE id = :id');

        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':titulo', $titulo);
        $stmt->bindParam(':descricao', $descricao);
        $stmt->bindParam(':datapubli', $datapubli);
        $stmt->bindParam(':marca', $marca);
        $stmt->bindParam(':modelo', $modelo);
        $stmt->bindParam(':ano', $ano);
        $stmt->bindParam(':cor', $cor);
        $stmt->bindParam(':placa', $placa);
        $stmt->bindParam(':proprietario', $proprietario);
        $stmt->bindParam(':telefone', $telefone);
        $stmt->bindParam(':imagem', $nome_imagem);
        $stmt->execute();

        header("Location: read-anuncio.php");
        exit();
    }
?>

    <main>
        <form class="form1" action="update-anuncio.php" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $dados[0]['id']; ?>">

    <div class="teste">
        <label for="titulo">Título do anúncio</label><br>
        <input type="text" name="titulo" id="titulo" value="<?php echo $dados[0]['titulo']; ?>"><br>
    </div>

    <div class="teste">
        <label for="descricao">Descrição do anúncio</label><br>
        <input type="text" name="descricao" id="descricao" value="<?php echo $dados[0]['descricao']; ?>"><br>
    </div>

    <div class="teste">
        <label for="datapubli">Data da publicação</label><br>
        <input type="text" name="datapubli" id="datapubli" value="<?php echo $dados[0]['datapubli']; ?>"><br>
    </div>

    <div class="teste">
        <label for="marca">Marca do veículo</label><br>
        <input type="text" name="marca" id="marca" value="<?php echo $dados[0]['marca']; ?>"><br>
    </div>

    <div class="teste">
        <label for="modelo">Modelo do veículo</label><br>
        <input type="text" name="modelo" id="modelo" value="<?php echo $dados[0]['modelo']; ?>"><br>
    </div>

    <div class="teste">
        <label for="ano">Ano do veículo</label><br>
        <input type="text" name="ano" id="ano" value="<?php echo $dados[0]['ano']; ?>"><br>
    </div>

    <div class="teste">
        <label for="cor">Cor do veículo</label><br>
        <input type="text" name="cor" id="cor" value="<?php echo $dados[0]['cor']; ?>"><br>
    </div>

    <div class="teste">
        <label for="placa">Placa do veículo</label><br>
        <input type="text" name="placa" id="placa" value="<?php echo $dados[0]['placa']; ?>"><br>
    </div>

    <div class="teste">
        <label for="proprietario">Nome do proprietário</label><br>
        <input type="text" name="proprietario" id="proprietario" value="<?php echo $dados[0]['proprietario']; ?>"><br>
    </div>

    <div class="teste">
        <label for="telefone">Telefone do proprietário</label><br>
        <input type="text" name="telefone" id="telefone" value="<?php echo $dados[0]['telefone']; ?>"><br>
    </div>

    <div class="teste">
        <label for="imagem">Imagem do veículo</label><br>
        <input type="file" name="imagem" id="imagem"><br>
    </div>

    <button type="submit">Salvar</button>
</form>
    </main>

<?php include '../../includes/footer.php'; ?>
