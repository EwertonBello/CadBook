@extends('layouts.book')

@section('content')
    <x-top-bar title="Lista de Livros"/>

    <div class="col-md-8 m-auto">

        <!-- will be used to show any messages -->
        @if (session()->has('message'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ session()->get('message') }}</strong>
            </div>
        @endif


        <div class="text-left">
            <a href="/books/create">
                <button class="btn btn-success mt-2 mb-3">
                    <i class="fas fa-plus"></i>
                    Cadastrar
                </button>
            </a>
        </div>

        <div class="table-responsive">
            @csrf
            <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Título</th>
                    <th scope="col">Autor</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Ações</th>
                </tr>
                </thead>
                <tfoot class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Título</th>
                    <th scope="col">Autor</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Ações</th>
                </tr>
                </tfoot>
                <tbody>
                @foreach($books as $book)
                    @php
                        $user = $book->relUsers;
                    @endphp
                    <tr>
                        <th scope="row">{{$book->id}}</th>
                        <td>{{$book->title}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$book->price}}</td>
                        <td class="d-flex justify-content-center">
                            <a href="{{ url("/books/$book->id") }}">
                                <button class="btn btn-dark ml-1">Visualizar</button>
                            </a>
                            <a href="{{ url("/books/$book->id/edit") }}">
                                <button class="btn btn-primary ml-1">Editar</button>
                            </a>
                            <a href="{{ url("/books/$book->id") }}" class="deleteBook" data-id="{{ $book->id }}">
                                <button class="btn btn-danger ml-1">Excluir</button>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

{{--        {{ $books->links() }}--}}
    </div>
@endsection
