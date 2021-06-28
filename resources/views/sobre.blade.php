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
                        <li><a href="{{ url('#') }}">Sobre</a></li>
                    </ul>
                </div>

                <div class="card-body">
                    <h1>CRUD Rick & Morty</h1>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <h2>Sobre</h2>
                    <p>Sou formado em Análise e Desenvolvimento de Sistemas pela Fatec Sorocaba, em 2018.</p>
                    <p>E sendo um analista e desenvolvedor de sistemas, eu procuro 
                        entender as necessidades e expectativas da empresa e respeitar a 
                        equipe. O que mais gosto no meu trabalho é de poder colocar o 
                        que sei em prática, fazer melhorias, e poder aprender, estudando, 
                        pesquisando, aprendendo e trabalhando com as pessoas, 
                        independentemente da idade ou do nível de cada uma. Isso me 
                        torna um profissional melhor.
                    </p>
                    <p>Trabalhei em escola, em loja e no Parque Tecnológico de Sorocaba em 2018, no projeto Coworking.
                    Além disso, já fiz voluntariado; e sou voluntário na minha igreja</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection