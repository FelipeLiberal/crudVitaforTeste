@extends('layouts.app')

@section('content')
<script language="javascript">
    
    fetch('https://rickandmortyapi.com/api/character', {
    method: 'GET'
    })
    .then(response => response.json())
    .then(function (json) {
        var container = document.querySelector('.cadastrarAPI')

        json.results.map(function (results) {

            container.innerHTML += `
                <form action="{{ url('characters/add') }}" method="post">
                @csrf
                <div> <img src=` + results.image + ` name='image'> </div><br>
                <input type='hidden' name='image' value='`+ results.image +`'>
                Nome:<strong> ` + results.name + ` </strong><br>
                <input type='hidden' name='name' value='`+ results.name +`'>
                Espécie:<span> ` + results.species + ` </span><br>
                <input type='hidden' name='species' value='`+ results.species +`'>
                <button type="submit" class="btn btn-primary" onclick="return confirm('Deseja cadastrar?');">Cadastrar</button>
                <hr>
                </form>
            `;
        })
    })
</script>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header" id="menu">
                    <ul>
                        <li><a href="{{ url('#') }}">Home</a></li>
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
                    
                    <h2>Home</h2>
                    <div class="cadastrarAPI"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection