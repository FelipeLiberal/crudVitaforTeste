@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" id="menu">
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('#') }}">Personagens</a></li>
                        <li><a href="{{ url('sobre') }}">Sobre</a></li>
                    </ul>
                </div>

                <div class="card-body">
                    <h1>CRUD Rick & Morty</h1>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <h2>Personagens</h2>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Imagem</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Espécie</th>
                                <th scope="col">Animação</th>
                                <th scope="col">Editar</th>
                                <th scope="col">Deletar</th>
                            </tr>
                        </thead>
                        <tbody>
                    @foreach( $characters as $c )
                            <tr>
                                <th scope="row">{{ $c->id }}</th>
                                <td><img src="{{ $c->image }}"></td>
                                <td>{{ $c->name }}</td>
                                <td>{{ $c->species }}</td>
                                <td>{{ $c->animation }}</td>
                                <td>
                                    <form action="characters/{{ $c->id }}/edit" method="get">
                                        @csrf
                                        @method('edit')
                                        <button class="btn btn-info">Editar</button>
                                    </form>
                                </td>
                                <td>
                                    <form action="characters/delete/{{ $c->id}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger">Deletar</button>
                                    </form>
                                </td>
                            </tr>
                    @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection