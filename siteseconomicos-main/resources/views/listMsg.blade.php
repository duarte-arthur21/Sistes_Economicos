@extends('layout.main')

@section('css')
    <link rel="stylesheet" href="{{ url('...') }}">
@endsection

@section('title', 'Lista de Usuários')
@php
    $page = 'Lista de Mensagens';
@endphp


@section('content')

    @foreach($msgs as $msg)
    
    @endforeach

@endsection
