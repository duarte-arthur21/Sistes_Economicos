@extends('layout.main')

@section('css')
    <link rel="stylesheet" href="{{ url('...') }}">
@endsection

@section('title', 'Lista de Usuários')
@php
    $page = 'Lista de Mensagens';
@endphp


@section('content')

<div id="search-container" class="col-md-12">
<nav class="navbar navbar-light bg-primary justify-content-between">
	<a class="navbar-brand">Mensagens Recebidas</a>
	<form class="navbar-left navbar-form nav-search" action="">
		<div class="input-group col-md-12">
			<input type="text" placeholder="Pesquisar ..." class="form-control">
			<div class="input-group-append">
				<span class="input-group-text">
					<i class="fa fa-search search-icon"></i>
				</span>
			</div>
		</div>
    </form>
</nav>
</div>

<div id="msg-container" class="col-md-12">
    <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Assunto</th>
                    <th scope="col">Texto</th>
                    <th scope="col"></th>
                </tr>
            </thead>

            <tbody>
                @foreach($msgs as $msg)
                <tr>
                    <td class="inbox-small-cells">
                        <input type="checkbox" class="mail-checkbox">
                    </td>
                    <td class="view-message ">{{$msg->id}}</td>	
                    <td class="view-message ">{{$msg->name}}</td>
                    <td class="view-message ">{{$msg->email}}</td>
                    <td class="view-message ">{{$msg->assunto}}</td>
                    <td class="view-message ">{{$msg->Texto}}</td>
                    <td class="btn btn-ligth">Ler mais...
                        <a href="#" ></a>
                    </td>
                </tr>
                @endforeach    
            </tbody>
    </table>
</div>
@endsection
