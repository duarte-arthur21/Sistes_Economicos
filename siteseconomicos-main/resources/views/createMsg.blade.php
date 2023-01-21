@extends('layout.main')

@section('css')
    <link rel="stylesheet" href="{{ url('...') }}">
@endsection

@section('title', 'Lista de Usuários')
@php
    $page = 'Lista de Usuários';
@endphp


@section('content')

    <div class="form-group">
        <div class="input-icon">
            <span class="input-icon-addon">
                <i class="fa fa-user"></i>
            </span>
            <input type="text" class="form-control" placeholder="Nome">
        </div>
    </div>

    <div class="form-group form-floating-label">
        <input id="inputFloatingLabel2" type="text" class="form-control input-solid" required="">
        <label for="inputFloatingLabel2" class="placeholder">Assunto</label>
    </div>

    <textarea  class="form-group form-group-default">
        <label>Input</label>
        <input id="Name" type="text" class="form-control" placeholder="Fill Name">
    </textarea>  

@endsection
