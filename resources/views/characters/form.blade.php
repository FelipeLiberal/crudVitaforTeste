@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" id="menu">
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('characters') }}">Personagens</a></li>
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

                    <h2>Editar Personagem</h2>
                    @if( Request::is('*/edit'))
                    <form action="{{ url('characters/update') }}/{{$character->id}}" method="post">
                    @csrf
                        <div class="form-group">
                            <label>Animação:</label>
                            <input type="text" name="animation" class="form-control" value="{{ $character->animation }}">
                        </div>

                        <button type="submit" class="btn btn-primary">Atualizar</button>
                    </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection