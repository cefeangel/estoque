@extends('principal')

@section('conteudo')
<h1>Detalhe produto: <?= $p->nome ?></h1>
<ul>
    <li><b>Valor:</b> <?= $p->valor ?></li>
    <li><b>Descrição:</b> <?= $p->descricao ?></li>
    <li><b>Quantidade em estoque:</b> <?= $p->quantidade ?></li>
</ul>
@stop
