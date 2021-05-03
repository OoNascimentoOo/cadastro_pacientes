@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h1 style="text-align:center">Ficha de Avaliação Facial</h1>
                <div class="card-header">Adicionar Paciente:</div>

                <div class="card-body">
                    <form method="POST" action="{{route('tarefa.store')}}">
                        @csrf
                        <div class="mb-3">
                          <label class="form-label">Nome Completo:</label>
                          <input type="text" class="form-control" name="nome" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">E-mail:</label>
                            <input type="email" class="form-control" name="email" required>
                          </div>
                        <div class="mb-3">
                          <label class="form-label">Endereço:</label>
                          <input type="text" class="form-control" name="endereco" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Cep:</label>
                            <input type="text" class="form-control cep-mask" placeholder="Ex.: 00000-000" name="cep" size="10" maxlength="8" required>
                          </div>
                          <div class="mb-3">
                            <label class="form-label">Telefone:</label>
                            <input type="number" class="form-control" name="telefone">
                          </div>
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
