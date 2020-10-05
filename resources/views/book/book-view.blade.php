@extends('layouts.book')

@section('content')
    <x-top-bar title="Livro"/>

    <div class="col-8 m-auto">
            <div class="card">
                <div class="card-header text-center">
                    <h2>{{ $book->title }}</h2>
                </div>
                @php
                    $user = $book->relUsers;
                @endphp
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">ID: {{ $book->id }}</li>
                    <li class="list-group-item">Título: {{ $book->title }}</li>
                    <li class="list-group-item">Autor: {{ $user->name }}</li>
                    <li class="list-group-item">E-mail: {{ $user->email }}</li>
                    <li class="list-group-item">Páginas: {{ $book->pages }}</li>
                    <li class="list-group-item">Preço: {{ $book->price }}</li>
                </ul>
            </div>
    </div>
@endsection

