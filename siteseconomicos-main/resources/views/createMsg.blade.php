@extends('layout.main')

@section('css')
    <link rel="stylesheet" href="{{ url('...') }}">
@endsection

@section('title', 'Lista de Usuários')
@php
    $page = 'Lista de Usuários';
@endphp


@section('content')

    <form>
          <div class="form-group">
                <input class="form-control col-sm-6" type="text" placeholder="Nome*">
          </div>
          <div class="form-group">          
                <input class="form-control col-sm-6" type="text" placeholder="E-mail*">
            </div>
          <div class="form-group">
                <input class="form-control col-sm-6" type="text" placeholder="Assunto*">
          </div>
          <div class="form-group">
                <textarea class="form-control" name="" id="" cols="5" rows="10">
          </textarea>
          </div>        
    </form>

@endsection
