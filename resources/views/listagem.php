<html>
    <head>
        <link href="/css/app.css" rel="stylesheet" >
        <title>Controle de estoque</title>
    </head>
    <body>
        <div class="container">
            <h1>Listagem Produtos</h1>
            <table class="table table-striped table-bordered table-hover">

                <?php foreach ($produtos as $key => $p): ?>
                    <tr>
                        <td><?php echo $p->nome; ?></td>
                        <td><?php echo $p->valor; ?></td>
                        <td><?php echo $p->descricao; ?></td>
                        <td><?php echo $p->quantidade; ?></td>
                        <td>
                            <a href="/produtos/mostra" >Visualizar
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </body>
</html>

