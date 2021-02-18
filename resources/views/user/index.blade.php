@extends('templates.master')

@section('css-view')
    
@endsection

@section('conteudo-view')

{!! Form::open(['route' => 'user.store', 'method' => 'post', 'class' => 'form-padrao']) !!}
    @include('templates.formulario.input', ['label' => 'CPF:', 'input' => 'cpf', 'attributes' => ['placeholder' => 'Digite seu CPF']])
    @include('templates.formulario.input', ['label' => 'Nome:', 'input' => 'name', 'attributes' => ['placeholder' => 'Digite seu nome']])
    @include('templates.formulario.input', ['label' => 'Telefone:', 'input' => 'phone', 'attributes' => ['placeholder' => 'Digite seu telefone']])
    @include('templates.formulario.input', ['label' => 'E-mail:', 'input' => 'email', 'attributes' => ['placeholder' => 'Digite seu e-mail']])
    @include('templates.formulario.password', ['label' => 'Senha', 'input' => 'password', 'attributes' => ['placeholder' => 'Digite sua senha']])
    @include('templates.formulario.submit', ['input' => 'Cadastrar'])
{!! Form::close() !!}
@endsection

@section('js-view')
    
@endsection