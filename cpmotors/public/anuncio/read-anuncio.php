<?php
include '../../config/connection.php';
include '../../includes/header.php';

$stmt = $pdo->query('SELECT * FROM anuncio');
$anuncios = $stmt->fetchAll();
foreach ($anuncios as $indice => $ad) { ?>

    <main>
        <div class="read-anuncio">
           
            <div class="read-anuncio-img">
                <img src="../../img/<?php echo $ad['imagem']; ?>" alt="<?php echo $ad['titulo']; ?>">
            </div>
             <div class="read-anuncio-update-delete">
                <a href="delete-anuncio.php?id=<?php echo $ad['id']; ?>">Deletar</a>
                <a href="update-anuncio.php?id=<?php echo $ad['id']; ?>">Atualizar</a>
            </div>
            <div class="read-anuncio-info">
                <p>Título: <?php echo $ad['titulo'] ?></p>
                <p>Descrição: <?php echo $ad['descricao'] ?></p>
                <p>Data: <?php echo $ad['datapubli'] ?></p>
                <p>Marca: <?php echo $ad['marca'] ?></p>
                <p>Modelo: <?php echo $ad['modelo'] ?></p>
                <p>Ano: <?php echo $ad['ano'] ?></p>
                <p>Cor: <?php echo $ad['cor'] ?></p>
                <p>Placa: <?php echo $ad['placa'] ?></p>
                <p>Proprietário: <?php echo $ad['proprietario'] ?></p>
                <p>Telefone: <?php echo $ad['telefone'] ?></p>
            </div>
        </div>
    </main>

<?php }
include '../../includes/footer.php'; ?>