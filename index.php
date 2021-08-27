<?php
require_once 'vendor/autoload.php';
use ExemploOO\Livro;

$livros = [];
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    foreach(json_decode($_POST['livros']) as $l) {
        array_push($livros, new Livro($l->titulo, $l->genero));
    }
    array_push($livros, new Livro($_POST['titulo'], $_POST['genero']));
}


?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Biblioteca</title>
    </head>
    <body>
        <h1>Título</h1>
        <form action="index.php" method="post">
            <input type="hidden" name="livros" value='<?= json_encode($livros) ?>' />
            <label for="titulo">Título</label>
            <input type="text" name="titulo" />
            <label for="genero">Gênero</label>
            <input type="text" name="genero" />
            <button type="submit">Salvar</button>
        </form>
        <hr />
        <table>
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Gênero</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($livros as $l): ?>
                    <tr>
                        <td><?= $l->getTitulo() ?></td>
                        <td><?= $l->getGenero() ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </body>
</html>