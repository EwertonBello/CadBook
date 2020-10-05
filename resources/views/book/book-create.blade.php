@extends('layouts.book')

@section('content')

    @if(isset($book)) <x-top-bar title="Editar"/> @else <x-top-bar title="Cadastrar"/> @endif

    <div class="col-8 m-auto">
        @if(isset($errors) && count($errors)>0)
            <div class="text-center mt-4 mb-4 p-2 alert-danger">
                @foreach($errors->all() as $erro)
                    {{ $erro }}<br/>
                @endforeach
            </div>
        @endif

        @if(isset($book))
            <form id="formEdit" name="formEdit" method="POST" action="{{ secure_url("/books/$book->id") }}">
                @method('PUT')
        @else
            <form id="formCad" name="formCad" method="POST" action="{{ secure_url('/books') }}">
        @endif
            @csrf
            <div class="form-group">
                <input class="form-control" type="text" name="title" id="title" placeholder="Título" value="{{ $book->title ?? '' }}" required>
            </div>
            <div class="form-group">
                <select class="form-control" name="user_id" id="user_id" required>
                    <option value="{{ $book->relUsers->id ?? '' }}">{{ $book->relUsers->name ?? 'Autor' }}</option>
                    @foreach($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach

                </select>
            </div>
            <div class="form-group">
                <input class="form-control" type="text" name="pages" id="pages" placeholder="Páginas" value="{{ $book->pages ?? '' }}" required>
            </div>
            <div class="form-group">
                <input class="form-control" type="text" name="price" id="price" placeholder="Preço" value="{{ $book->price ?? '' }}" required>
            </div>
            <div class="form-group">
                <input class="btn btn-primary" type="submit" value="@if(isset($book)) Editar @else Cadastrar @endif">
            </div>
        </form>
    </div>
@endsection

