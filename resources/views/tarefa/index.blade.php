@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Registros:<a href="{{route('tarefa.create')}}" class="float-right">Novo</a></div>

                    <div class="card-body">

                        <table class="table">
                            <thead>
                                <tr>
                                  <th scope="col">ID</th>
                                  <th scope="col">NOME</th>
                                  <th scope="col">E-MAIL</th>
                                  <th scope="col">ENDEREÇO</th>
                                  <th scope="col">CEP</th>
                                  <th scope="col">TELEFONE</th>
                                  <th></th>
                                  <th></th>
                                </tr>
                              </thead>
                              <tbody>
                                  @foreach ($tarefa as $key => $p)
                                    <tr>
                                    <th scope="row">{{$p['id']}}</th>
                                    <td>{{$p['nome']}}</td>
                                    <td>{{$p['email']}}</td>
                                    <td>{{$p['endereco']}}</td>
                                    <td>{{$p['cep']}}</td>
                                    <td>{{$p['telefone']}}</td>
                                    <td><a href="{{route('tarefa.edit', $p['id'])}}">Editar</a></td>
                                        <td>
                                            <form id="form_{{$p['id']}}" method="post" action="{{route('tarefa.destroy', ['tarefa' => $p['id']])}}">
                                                @method('DELETE')
                                                @csrf
                                            </form>
                                            <a href="#" onclick="document.getElementById('form_{{$p['id']}}').submit()">Excluir</a>
                                        </td>
                                    </tr>
                                @endforeach
                              </tbody>
                        </table>

                        <nav>
                            <ul class="pagination">
                              <li class="page-item"><a class="page-link" href="{{$tarefa->previousPageUrl()}}">Voltar</a></li>

                              @for($i = 1; $i <= $tarefa->lastPage(); $i++)
                                <li class="page-item {{$tarefa->currentPage() == $i ? 'active' : '' }}">
                                    <a class="page-link" href="{{$tarefa->url($i)}}">{{$i}}</a>
                                </li>
                              @endfor

                              <li class="page-item"><a class="page-link" href="{{$tarefa->nextPageUrl()}}">Avançar</a></li>
                            </ul>
                          </nav>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
