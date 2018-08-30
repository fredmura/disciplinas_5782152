@extends('layouts.master')
<h1>{{ $disciplina->titulo }}</h1>
<p>{{ $disciplina->ementa }}</p>
<a href="/disciplinas/{{ $disciplina->id }}/turmas/create">Inserir Turma</a>
@foreach ($disciplina->turmas as $turma)
	{{ $turma->ministrante }}
	{{ $turma->inicio }}
@endforeach
