<a href="/disciplinas/create">Cadastrar disciplina</a>
<ul>
	@foreach ($disciplinas as $disciplina)
		<li>
			<a href="/disciplinas/{{ $disciplina->id }}">
			{{ $disciplina->titulo }} 
			</a>
			<a href="/disciplinas/{{ $disciplina->id }}/edit"> Editar </a>
		</li>
	@endforeach
</ul>
