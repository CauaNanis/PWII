<?php 
    include '../../config/connection.php';
    include '../../includes/header.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $titulo = isset($_POST['titulo']) ? $_POST['titulo'] : exit('Título não informado');
    $descricao = isset($_POST['descricao']) ? $_POST['descricao'] : exit('Descrição não informada');
    $datapubli = isset($_POST['datapubli']) ? $_POST['datapubli'] : exit('Data da publicação não informada');
    $marca = isset($_POST['marca']) ? $_POST['marca'] : exit('Marca não informada');
    $modelo = isset($_POST['modelo']) ? $_POST['modelo'] : exit('Modelo não informado');
    $ano = isset($_POST['ano']) ? $_POST['ano'] : exit('Ano não informado');
    $cor = isset($_POST['cor']) ? $_POST['cor'] : exit('Cor não informada');
    $placa = isset($_POST['placa']) ? $_POST['placa'] : exit('Placa não informada');
    $proprietario = isset($_POST['proprietario']) ? $_POST['proprietario'] : exit('Proprietário não informado');
    $telefone = isset($_POST['telefone']) ? $_POST['telefone'] : exit('Telefone não informado');
    
    $imagem = isset($_FILES['imagem']) ? $_FILES['imagem'] : exit('Imagem não enviada');
    $nome_imagem = uniqid() . "-" . basename($imagem['name']);
    $caminho_imagem = "../../img/$nome_imagem";

    if(!move_uploaded_file($imagem['tmp_name'], $caminho_imagem)) {
        exit('Erro ao salvar a imagem');
    }

    $stmt = $pdo->prepare('INSERT INTO anuncio (titulo, descricao, datapubli, marca, modelo, ano, cor, placa, proprietario, telefone, imagem) VALUES (:titulo, :descricao, :datapubli, :marca, :modelo, :ano, :cor, :placa, :proprietario, :telefone, :imagem)');
    
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

    if($stmt->execute()) {
        echo '<p style="color:green;">Carro cadastrado com sucesso!</p>';
    } else {
        echo '<p style="color:red;">Erro ao cadastrar carro.</p>';
    }
}
?>

    <main>
    <form class="form1" action="create-anuncio.php" method="POST" enctype="multipart/form-data">
    
    <div class="teste">
        <label for="titulo">Título do anúncio</label><br>
        <input type="text" name="titulo" id="titulo">
        <br>
    </div>

    <div class="teste">
        <label for="descricao">Descrição do anúncio</label><br>
        <input type="text" name="descricao" id="descricao">
        <br>
    </div>

    <div class="teste">
        <label for="datapubli">Data da publicação</label><br>
        <input type="text" name="datapubli" id="datapubli">
        <br>
    </div>

    <div class="teste">
        <label for="marca">Marca do veículo</label><br>
        <input type="text" name="marca" id="marca">
        <br>
    </div>

    <div class="teste">
        <label for="modelo">Modelo do veículo</label><br>
        <input type="text" name="modelo" id="modelo">
        <br>
    </div>

    <div class="teste">
        <label for="ano">Ano do veículo</label><br>
        <input type="text" name="ano" id="ano">
        <br>
    </div>

    <div class="teste">
        <label for="cor">Cor do veículo</label><br>
        <input type="text" name="cor" id="cor">
        <br>
    </div>

    <div class="teste">
        <label for="placa">Placa do veículo</label><br>
        <input type="text" name="placa" id="placa">
        <br>
    </div>

    <div class="teste">
        <label for="proprietario">Nome do proprietário</label><br>
        <input type="text" name="proprietario" id="proprietario">
        <br>
    </div>

    <div class="teste">
        <label for="telefone">Telefone do proprietário</label><br>
        <input type="text" name="telefone" id="telefone">
        <br>
    </div>

    <div class="teste">
        <label for="imagem">Imagem do veículo</label><br>
        <input type="file" name="imagem" id="imagem" required>
        <br>
    </div>
    
    <button type="submit" class="btn-create">Cadastrar</button>
</form>
    </main>

<?php include '../../includes/footer.php'; ?>
