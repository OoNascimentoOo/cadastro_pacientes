@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dados do Paciente:</div>

                    <div class="card-body">
                        <fieldset disabled>
                                <div class="mb-3">
                                    <label class="form-label">Nome Completo:</label>
                                    <input type="text" value="{{$tarefa->nome}}" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">E-mail:</label>
                                    <input type="email" value="{{$tarefa->email}}" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Endereço:</label>
                                    <input type="text" class="form-control" value="{{$tarefa->endereco}}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Cep:</label>
                                    <input type="text" class="form-control cep-mask" value="{{$tarefa->cep}}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Telefone:</label>
                                    <input type="number" class="form-control" value="{{$tarefa->telefone}}">
                                </div>
                        </fieldset>
                        <a href="{{url()->previous()}}" class="btn btn-primary">Voltar</a>
                     </div>
                </div>
            </div>
        </div>
    </div>
@endsection
