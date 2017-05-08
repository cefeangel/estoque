@extends('layout.principal')

@section('conteudo')
    <form>
        <div class="form-group">
          <label for="nome">Nome</label>
          <input type="text" class="form-control" id="nome">
        </div>
        <div class="form-group">
          <label for="descricao">Descrição</label>
          <input type="text" class="form-control" id="descricao">
        </div>
        <div class="form-group">
          <label for="valor">Valor</label>
          <input type="text" class="form-control" id="valor">
        </div>
         <div class="form-group">
          <label for="quantidade">Valor</label>
          <input type="number" class="form-control" id="quantidade">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
@stop
