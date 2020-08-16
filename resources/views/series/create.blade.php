@extends('layout')

@section('cabecalho')
Adicionar Séries
@endsection

@section('conteudo')
<form action="" method="post">
<div class="form-group">
<label for="nome">Nome da Série</label>
<input type="text" class="form-control" name="nome" id="nome" >
</div>
<button class="btn btn-primary">Adicionar</button>
</div>
@endsection