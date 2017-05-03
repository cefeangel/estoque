<html>
    <head></head>
    <body>
        <h1>Listagem Produtos</h1>
        <table>
            <?php foreach ($produtos as $key => $p): ?>
            <tr>
                <td><?php echo $p->nome; ?></td>
                <td><?php echo $p->valor; ?></td>
                <td><?php echo $p->descricao; ?></td>
                <td><?php echo $p->quantidade; ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </body>
</html>

